<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Blur;

describe('Sigma', function () {
	it('handles basic option', function () {
		$value = 1.5;
		$parameter = '1.5';

		$option = new Blur($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
