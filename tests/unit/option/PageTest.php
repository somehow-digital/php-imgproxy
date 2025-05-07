<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Page;

describe('Page', function () {
	it('handles basic option', function () {
		$value = 0;
		$parameter = '0';

		$option = new Page($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function () {
		$value = -1;

		expect(fn () => new Page($value))->toThrow(InvalidArgumentException::class);
	});
});
