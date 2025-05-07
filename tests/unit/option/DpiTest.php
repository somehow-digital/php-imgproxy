<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Dpi;

describe('Dpi', function () {
	it('handles basic option', function () {
		$value = 90;
		$parameter = '90';

		$option = new Dpi($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
