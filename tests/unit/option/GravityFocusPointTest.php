<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityFocusPoint;

describe('GravityFocusPoint', function () {
	it('handles basic option', function () {
		$values = [GravityEnum::FOCUS_POINT, 0.563, 0.122];
		$parameters = ['fp', '0.563', '0.122'];

		$option = new GravityFocusPoint(...array_slice($values, 1));

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
