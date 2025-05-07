<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Watermark;
use SomehowDigital\ImgProxy\Option\WatermarkPositionEnum;

describe('Watermark', function () {
	it('handles basic option', function () {
		$value = 1.0;
		$parameter = '1';

		$option = new Watermark($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles position enum value', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER];
		$parameters = ['0.25', 'ce'];

		$option = new Watermark(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles position string value', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER];
		$parameters = ['0.25', 'ce'];

		$option = new Watermark($values[0], $values[1]->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles all options', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER, 0.5, 0.5, 0.5];
		$parameters = ['0.25', 'ce', '0.5', '0.5', '0.5'];

		$option = new Watermark(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
