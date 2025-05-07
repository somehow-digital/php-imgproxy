<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxBytes;

describe('MaxBytes', function () {
	it('handles basic option', function () {
		$value = 1024;
		$parameter = '1024';

		$option = new MaxBytes($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
