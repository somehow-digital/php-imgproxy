<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxAnimationFrames;

describe('MaxAnimationFrames', function (): void {
	it('handles basic option', function (): void {
		$value = 1;
		$parameter = '1';

		$option = new MaxAnimationFrames($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function (): void {
		$value = -1;

		expect(fn(): MaxAnimationFrames => new MaxAnimationFrames($value))->toThrow(InvalidArgumentException::class);
	});

	it('accepts one frame', function (): void {
		expect((new MaxAnimationFrames(1))->getValues())->toBe([1]);
	});

	it('rejects zero frames', function (): void {
		expect(fn(): MaxAnimationFrames => new MaxAnimationFrames(0))->toThrow(InvalidArgumentException::class);
	});
});
