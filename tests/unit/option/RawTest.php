<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Raw;

describe('Raw', function () {
	it('handles basic option', function () {
		$value = true;
		$parameter = '1';

		$option = new Raw();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
