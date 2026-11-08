<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Rotate;

describe('Rotate', function (): void {
	it('handles basic option', function (): void {
		$value = 90;
		$parameter = '90';
		$option = new Rotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('accepts a zero angle', function (): void {
		expect((new Rotate(0))->getParameters())->toBe(['0']);
	});

	it('throws on invalid angle', function (): void {
		expect(fn(): Rotate => new Rotate(45))->toThrow(InvalidArgumentException::class);
	});

	it('throws on negative angle', function (): void {
		expect(fn(): Rotate => new Rotate(-90))->toThrow(InvalidArgumentException::class);
	});
});
