<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Pages;

describe('Pages', function (): void {
	it('handles basic option', function (): void {
		$value = 1;
		$parameter = '1';

		$option = new Pages($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function (): void {
		$value = 0;

		expect(fn(): Pages => new Pages($value))->toThrow(InvalidArgumentException::class);
	});
});
