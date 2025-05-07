<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\BackgroundAlpha;

describe('BackgroundAlpha', function () {
	it('handles basic option', function () {
		$value = 0.25;
		$parameter = '0.25';

		$option = new BackgroundAlpha($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
