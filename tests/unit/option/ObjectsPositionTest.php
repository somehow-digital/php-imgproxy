<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ObjectsPosition;
use SomehowDigital\ImgProxy\Option\ObjectsPositionTypeEnum;

describe('ObjectsPosition', function () {
	it('handles enum value', function () {
		$value = ObjectsPositionTypeEnum::NORTH;
		$parameter = 'no';

		$option = new ObjectsPosition($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles string value', function () {
		$value = ObjectsPositionTypeEnum::NORTH;
		$parameter = 'no';

		$option = new ObjectsPosition($value->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles offset option', function () {
		$values = [ObjectsPositionTypeEnum::SOUTH, 100.0, 100.0];
		$parameters = ['so', '100', '100'];

		$option = new ObjectsPosition(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
