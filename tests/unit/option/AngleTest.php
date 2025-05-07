<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Rotate;

describe('Angle', function () {
	it('handles basic option', function () {
		$value = 90;
		$parameter = '90';

		$option = new Rotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
