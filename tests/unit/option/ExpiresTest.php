<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Expires;

describe('Expires', function () {
	it('handles basic option', function () {
		$value = time();
		$parameter = (string) $value;

		$option = new Expires($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
