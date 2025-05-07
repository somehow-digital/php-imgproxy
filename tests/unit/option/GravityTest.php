<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Gravity', function () {
	it('handles enum value', function () {
		$value = GravityEnum::NORTH;
		$parameter = 'no';

		$option = new Gravity($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles string value', function () {
		$value = GravityEnum::NORTH;
		$parameter = 'no';

		$option = new Gravity($value->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles offset option', function () {
		$values = [GravityEnum::SOUTH, 100.0, 100.0];
		$parameters = ['so', '100', '100'];

		$option = new Gravity(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
