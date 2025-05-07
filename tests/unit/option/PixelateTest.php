<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Pixelate;

describe('Pixelate', function () {
	it('handles basic option', function () {
		$value = 8;
		$parameter = '8';

		$option = new Pixelate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
