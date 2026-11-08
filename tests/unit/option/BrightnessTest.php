<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Brightness;

describe('Brightness', function (): void {
	it('handles basic option', function (): void {
		$value = 255;
		$parameter = '255';

		$option = new Brightness($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('rejects values out of range', function (int $value): void {
		expect(fn(): Brightness => new Brightness($value))->toThrow(InvalidArgumentException::class);
	})->with([[-256], [256]]);

	it('accepts the boundaries', function (int $value): void {
		$option = new Brightness($value);

		expect($option->getValues())->toBe([$value]);
	})->with([[-255], [255]]);
});
