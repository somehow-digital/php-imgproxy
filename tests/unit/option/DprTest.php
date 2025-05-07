<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Dpr;

describe('Dpr', function () {
	it('handles basic option', function () {
		$value = 1.5;
		$parameter = '1.5';

		$option = new Dpr($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
