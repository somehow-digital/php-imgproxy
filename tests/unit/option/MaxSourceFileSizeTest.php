<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxSourceFileSize;

describe('MaxSourceFileSize', function (): void {
	it('handles basic option', function (): void {
		$value = 1024;
		$parameter = '1024';

		$option = new MaxSourceFileSize($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function (): void {
		$value = -1;

		expect(fn(): MaxSourceFileSize => new MaxSourceFileSize($value))->toThrow(InvalidArgumentException::class);
	});

	it('accepts zero', function (): void {
		expect((new MaxSourceFileSize(0))->getValues())->toBe([0]);
	});
});
