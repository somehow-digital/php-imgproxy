<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

interface OptionInterface
{
	public function getName(): string;
	public function getAlias(): ?string;
	public function getValues(): array;
	public function getParameters(): array;
}
