<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxResultDimension;

describe('MaxResultDimension', function (): void {
	it('handles basic option', function (): void {
		$option = new MaxResultDimension(8192);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['8192']);
	});

	it('accepts zero', function (): void {
		$option = new MaxResultDimension(0);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0']);
	});

	it('rejects a negative size', function (): void {
		expect(fn(): MaxResultDimension => new MaxResultDimension(-1))->toThrow(InvalidArgumentException::class);
	});
});
