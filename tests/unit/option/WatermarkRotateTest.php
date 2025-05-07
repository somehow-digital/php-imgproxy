<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkRotate;

describe('WatermarkRotate', function () {
	it('handles basic option', function () {
		$value = 90.0;
		$parameter = '90';

		$option = new WatermarkRotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
