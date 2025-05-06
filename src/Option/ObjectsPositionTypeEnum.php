<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

enum ObjectsPositionTypeEnum: string {
	case NORTH = 'no';
	case EAST = 'ea';
	case SOUTH = 'so';
	case WEST = 'we';
	case NORTH_EAST = 'noea';
	case NORTH_WEST = 'nowe';
	case SOUTH_EAST = 'soea';
	case SOUTH_WEST = 'sowe';
	case CENTER = 'ce';
	case FOCUS_POINT = 'fp';
	case PROPORTION = 'prop';
}
