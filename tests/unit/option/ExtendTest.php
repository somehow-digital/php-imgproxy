<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Extend;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Extend', function () {
	it('handles basic option', function () {
		$value = true;
		$parameter = '1';

		$option = new Extend();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles gravity option', function () {
		$values = [true, new Gravity(GravityEnum::WEST)];
		$parameters = ['1', 'we'];

		$option = new Extend(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
