<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy;

use SomehowDigital\ImgProxy\Masker\MaskerInterface;
use SomehowDigital\ImgProxy\Option\FormatEnum;
use SomehowDigital\ImgProxy\Option\OptionInterface;
use SomehowDigital\ImgProxy\Signer\SignerInterface;

class Url {
	private const PATH_SEPARATOR = '/';
	private const OPTION_SEPARATOR = ':';
	private const PIPELINE_SEPARATOR = '/-/';
	private const FORMAT_SEPARATOR = '@';
	private const SIGNATURE_PLACEHOLDER = '_';
	private const MASK_PREFIX = 'plain';

	public function __construct(
		private readonly ?MaskerInterface $masker = null,
		private readonly ?SignerInterface $signer = null,
		private readonly array $options = [],
		private readonly ?string $source = null,
	) {}

	public static function create(
		?MaskerInterface $masker = null,
		?SignerInterface $signer = null,
	): self {
		return new self($masker, $signer);
	}

	public function source(string $source): self {
		return new self($this->masker, $this->signer, $this->options, $source);
	}

	public function options(OptionInterface | array ...$options): self {
		return new self(
			$this->masker,
			$this->signer,
			[...$this->options, ...$options],
			$this->source,
		);
	}

	public function build(FormatEnum | string | null $format = null): string
	{
		$format = is_string($format) ? FormatEnum::from($format) : $format;

		$path = $this->buildPath($this->source, $format);
		$signature = $this->signer?->sign($path) ?: self::SIGNATURE_PLACEHOLDER;

		return implode(self::PATH_SEPARATOR, [
			$signature,
			$path,
		]);
	}

	private function buildPath(string $source, ?FormatEnum $format = null): string {
		$url = $this->buildSource($source, $format);
		$options = $this->buildOptions();
		$prefix = $this->masker?->getPathPrefix() ?: self::MASK_PREFIX;

		return implode(self::PATH_SEPARATOR, array_filter([
			$options,
			$prefix,
			$url,
		]));
	}

	private function buildSource(string $source, ?FormatEnum $format = null): string {
		$source = $this->masker?->mask($source) ?: rawurlencode($source);
		$separator = $this->masker?->getFormatSeparator() ?: self::FORMAT_SEPARATOR;

		return implode($separator, array_filter([
			$source,
			$format?->value ?: $format,
		]));
	}

	private function buildOptions(): string {
		$groups = $this->groupOptions($this->options);

		return implode(self::PIPELINE_SEPARATOR, array_map(function (array $group) {
			return implode(self::PATH_SEPARATOR, array_map(function (OptionInterface $option) {
				return implode(self::OPTION_SEPARATOR, [
					$option->getAlias() ?: $option->getName(),
					implode(self::OPTION_SEPARATOR, $option->getParameters())
				]);
			}, $group));
		}, $groups));
	}

	private function groupOptions(array $options): array {
		$groups = [];
		$stack = [];

		foreach ($options as $option) {
			if (is_array($option)) {
				$groups[] = $stack;
				$groups[] = $option;
				$stack = [];
			} else {
				$stack[] = $option;
			}
		}

		$groups[] = $stack;

		return array_filter($groups);
	}
}
