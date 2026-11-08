<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

interface OptionInterface
{
	public function getName(): string;

	public function getAlias(): ?string;

	/**
	 * @return array<mixed>
	 */
	public function getValues(): array;

	/**
	 * @return list<string>
	 */
	public function getParameters(): array;
}
