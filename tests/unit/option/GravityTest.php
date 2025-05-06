<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Gravity', function () {
	it('handles basic option', function () {
		$value = GravityEnum::NORTH;

		$option = new Gravity($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles offset option', function () {
		$values = [GravityEnum::SOUTH, 100.0, 100.0];

		$option = new Gravity(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
