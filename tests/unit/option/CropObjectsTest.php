<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\CropObjects;

describe('CropObjects', function (): void {
	it('handles basic option', function (): void {
		$option = new CropObjects(1.2);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1.2']);
	});

	it('handles classes', function (): void {
		$option = new CropObjects(1.0, 'face', 'person');

		expect($option->getParameters())->toBe(['1', 'face', 'person']);
	});
});
