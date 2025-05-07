<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityObject;

describe('GravityObject', function () {
	it('handles basic option', function () {
		$values = [GravityEnum::OBJECT, 'face', 'tree', 'car'];
		$parameters = ['obj', 'face', 'tree', 'car'];

		$option = new GravityObject(...array_slice($values, 1));

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
