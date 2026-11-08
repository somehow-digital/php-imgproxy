<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Crop;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Crop', function (): void {
	it('handles basic options', function (): void {
		$values = [100.0, 100.0];
		$parameters = ['100', '100'];

		$option = new Crop(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles gravity option', function (): void {
		$values = [100.0, 100.0, new Gravity(GravityEnum::CENTER)];
		$parameters = ['100', '100', 'ce'];

		$option = new Crop(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles relative sizes', function (): void {
		$option = new Crop(0.5, 0.25);

		expect($option->getParameters())->toBe(['0.5', '0.25']);
	});
});
