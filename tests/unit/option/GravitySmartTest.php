<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravitySmart;

describe('GravitySmart', function (): void {
	it('handles basic option', function (): void {
		$value = GravityEnum::SMART;
		$parameter = 'sm';

		$option = new GravitySmart();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
