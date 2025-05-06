<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Masker;

interface MaskerInterface
{
	public function getPathPrefix(): ?string;
	public function getFormatSeparator(): ?string;
	public function mask(string $value): string;
}
