<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityObjectWeight;

describe('GravityObjectWeight', function () {
	it('handles basic option', function () {
		$values = [GravityEnum::OBJECT_WEIGHT, ['face', 1], ['tree', 2], ['car', 3]];
		$parameters = ['objw', 'face', '1', 'tree', '2', 'car', '3'];

		$option = new GravityObjectWeight(...array_slice($values, 1));

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
