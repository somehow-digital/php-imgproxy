<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\BlurDetections;

describe('BlurDetections', function (): void {
	it('handles basic option', function (): void {
		$option = new BlurDetections(5.0);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['5']);
	});

	it('handles classes', function (): void {
		$option = new BlurDetections(5.0, 'face', 'person');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['5', 'face', 'person']);
	});
});
