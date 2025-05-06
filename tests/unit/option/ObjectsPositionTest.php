<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ObjectsPosition;
use SomehowDigital\ImgProxy\Option\ObjectsPositionTypeEnum;

describe('ObjectsPosition', function () {
	it('handles basic option', function () {
		$value = ObjectsPositionTypeEnum::NORTH;

		$option = new ObjectsPosition($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles offset option', function () {
		$values = [ObjectsPositionTypeEnum::SOUTH, 100.0, 100.0];

		$option = new ObjectsPosition(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
