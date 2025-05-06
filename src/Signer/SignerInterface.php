<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Signer;

interface SignerInterface
{
	public function sign(string $value): string;
}
