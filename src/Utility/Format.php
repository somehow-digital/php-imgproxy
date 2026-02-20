<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Utility;

class Format
{
	public static function supports(string $extension, bool $pro = false): bool
	{
		return in_array($extension, [
			'png',
			'jpg',
			'jpeg',
			'jxl',
			'webp',
			'avif',
			'gif',
			'ico',
			'svg',
			'heic',
			'bmp',
			'tiff',
			'tif',
			...($pro ? [
				'pdf',
				'psd',
				'mp4',
			] : []),
		]);
	}
}
