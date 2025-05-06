<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Rotate;

describe('Rotate', function () {
	it('returns valid values', function () {
		$value = 90;
		$parameter = '90';

		$option = new Rotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
