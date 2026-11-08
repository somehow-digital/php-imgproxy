<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\BlurAreas;

describe('BlurAreas', function (): void {
	it('handles basic option', function (): void {
		$option = new BlurAreas(5.0);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['5']);
	});

	it('handles areas', function (): void {
		$option = new BlurAreas(5.0, [0.1, 0.2, 0.3, 0.4], [0.5, 0.5, 0.25, 0.25]);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['5', '0.1', '0.2', '0.3', '0.4', '0.5', '0.5', '0.25', '0.25']);
	});

	it('rejects an incomplete area', function (): void {
		expect(fn(): BlurAreas => new BlurAreas(5.0, [0.1, 0.2]))->toThrow(InvalidArgumentException::class);
	});
});
