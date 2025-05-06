<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ExtendAspectRatio;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('ExtendAspectRatio', function () {
	it('handles basic options', function () {
		$value = true;
		$parameter = '1';

		$option = new ExtendAspectRatio();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles gravity option', function () {
		$values = [true, new Gravity(GravityEnum::WEST)];

		$parameters = [
			'1',
			'we',
		];

		$option = new ExtendAspectRatio(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
