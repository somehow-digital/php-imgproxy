<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

abstract class OptionAbstract implements OptionInterface
{
	protected const NAME = '';
	protected const ALIAS = null;

	/** @var array<mixed> */
	protected array $values = [];

	public function getName(): string
	{
		/** @var string $name */
		$name = static::NAME;

		return $name;
	}

	public function getAlias(): ?string
	{
		/** @var string|null $alias */
		$alias = static::ALIAS;

		return $alias;
	}

	/**
	 * @return array<mixed>
	 */
	public function getValues(): array
	{
		return $this->values;
	}

	/**
	 * @return list<string>
	 */
	public function getParameters(): array
	{
		$parameters = array_map(
			fn(mixed $value): array => is_array($value = Url::transform($value)) ? $value : [$value],
			$this->getValues(),
		);

		/** @var list<string> $merged */
		$merged = array_merge(...$parameters);

		return $merged;
	}

	/**
	 * @param array<mixed> $values
	 */
	protected function setValues(array $values): void
	{
		while ($values !== [] && ($values[array_key_last($values)] === null || $values[array_key_last($values)] === '')) {
			array_pop($values);
		}

		$this->values = $values;
	}
}
