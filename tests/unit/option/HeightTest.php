<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Height;

describe('Height', function () {
	it('handles basic option', function () {
		$value = 12345;
		$parameter = '12345';

		$option = new Height($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
