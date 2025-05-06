<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

enum ResizingTypeEnum: string {
	case FIT = 'fit';
	case FILL = 'fill';
	case FILL_DOWN = 'fill-down';
	case FORCE = 'force';
	case AUTO = 'auto';
}
