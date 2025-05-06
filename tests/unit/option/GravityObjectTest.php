<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityObject;

describe('GravityObject', function () {
	it('handles basic option', function () {
		$values = [GravityEnum::OBJECT, 'face', 'tree', 'car'];
		$parameters = array_slice($values, 1);

		$option = new GravityObject(...$parameters);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
