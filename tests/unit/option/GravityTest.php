<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Gravity', function (): void {
	it('handles enum value', function (): void {
		$value = GravityEnum::NORTH;
		$parameter = 'no';

		$option = new Gravity($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles string value', function (): void {
		$value = GravityEnum::NORTH;
		$parameter = 'no';

		$option = new Gravity($value->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles offset option', function (): void {
		$values = [GravityEnum::SOUTH, 100.0, 100.0];
		$parameters = ['so', '100', '100'];

		$option = new Gravity(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('keeps skipped arguments in place', function (): void {
		$option = new Gravity(GravityEnum::CENTER, null, 5.0);

		expect($option->getParameters())->toBe(['ce', '', '5']);
	});
});
