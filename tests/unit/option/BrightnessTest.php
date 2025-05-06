<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Brightness;

describe('Brightness', function () {
	it('handles basic option', function () {
		$value = 255;

		$option = new Brightness($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
