<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Rotate;

describe('Rotate', function () {
	it('handles basic option', function () {
		$value = 90;
		$parameter = '90';
		$option = new Rotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws on invalid angle', function () {
		expect(fn () => new Rotate(45))->toThrow(InvalidArgumentException::class);
	});
});
