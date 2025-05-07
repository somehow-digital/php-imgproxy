<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxAnimationFrames;

describe('MaxAnimationFrames', function () {
	it('handles basic option', function () {
		$value = 1;
		$parameter = '1';

		$option = new MaxAnimationFrames($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function () {
		$value = -1;

		expect(fn () => new MaxAnimationFrames($value))->toThrow(InvalidArgumentException::class);
	});
});
