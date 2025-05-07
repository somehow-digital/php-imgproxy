<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Watermark;
use SomehowDigital\ImgProxy\Option\WatermarkPositionEnum;

describe('Watermark', function () {
	it('handles basic option', function () {
		$value = 1.0;

		$option = new Watermark($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles position enum value', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER];

		$option = new Watermark(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('handles position string value', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER];

		$option = new Watermark($values[0], $values[1]->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('handles all options', function () {
		$values = [0.25, WatermarkPositionEnum::CENTER, 0.5, 0.5, 0.5];

		$option = new Watermark(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
