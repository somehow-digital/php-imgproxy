<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravitySmart;

describe('GravitySmart', function () {
	it('handles basic option', function () {
		$value = GravityEnum::SMART;

		$option = new GravitySmart();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
