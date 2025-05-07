<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Crop;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

describe('Crop', function () {
	it('handles basic options', function () {
		$values = [100, 100];
		$parameters = ['100', '100'];

		$option = new Crop(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles gravity option', function () {
		$values = [100, 100, new Gravity(GravityEnum::CENTER)];
		$parameters = ['100', '100', 'ce'];

		$option = new Crop(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
