<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

abstract class OptionAbstract implements OptionInterface
{
	protected const NAME = '';
	protected const ALIAS = null;

	protected readonly array $values;

	public function getName(): string {
		return static::NAME;
	}

	public function getAlias(): ?string {
		return static::ALIAS;
	}

	public function getValues(): array {
		return $this->values;
	}

	public function getParameters(): array
	{
		$parameters = array_map(
			fn($value) => is_array($value = Url::transform($value)) ? $value : [$value],
			$this->getValues(),
		);

		return array_merge(...$parameters);
	}

	protected function setValues(array $values): void {
		$this->values = array_filter($values, function ($value) {
			return $value !== null && $value !== '';
		});
	}
}
