<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\DrawDetections;

describe('DrawDetections', function (): void {
	it('handles basic option', function (): void {
		$option = new DrawDetections();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1']);
	});

	it('handles classes', function (): void {
		$option = new DrawDetections(true, 'face');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1', 'face']);
	});

	it('handles disabled drawing', function (): void {
		$option = new DrawDetections(false);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0']);
	});
});
