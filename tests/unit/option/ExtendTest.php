<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Extend;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Extend', function () {
	it('handles basic option', function () {
		$value = true;

		$option = new Extend();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles gravity option', function () {
		$values = [true, new Gravity(GravityEnum::WEST)];

		$option = new Extend(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
