<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityFocusPoint;

describe('GravityFocusPoint', function () {
	it('handles basic option', function () {
		$values = [GravityEnum::FOCUS_POINT, 0.563, 0.122];
		$parameters = array_slice($values, 1);

		$option = new GravityFocusPoint(...$parameters);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
