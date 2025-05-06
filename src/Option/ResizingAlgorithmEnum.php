<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

enum ResizingAlgorithmEnum: string {
	case NEAREST = 'nearest';
	case LINEAR = 'linear';
	case CUBIC = 'cubic';
	case LANCZOS2 = 'lanczos2';
	case LANCZOS3 = 'lanczos3';
}
