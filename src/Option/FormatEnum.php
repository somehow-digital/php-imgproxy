<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

enum FormatEnum: string {
	case PNG = 'png';
	case JPG = 'jpg';
	case JXL = 'jxl';
	case WEBP = 'webp';
	case AVIF = 'avif';
	case GIF = 'gif';
	case ICO = 'ico';
	case SVG = 'svg';
	case HEIC = 'heic';
	case BMP = 'bmp';
	case TIFF = 'tiff';
	case MP4 = 'mp4';
	case BEST = 'best';
}
