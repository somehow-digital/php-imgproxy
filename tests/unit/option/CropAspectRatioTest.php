<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\CropAspectRatio;

describe('CropAspectRatio', function (): void {
	it('handles basic option', function (): void {
		$option = new CropAspectRatio(1.5);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1.5']);
	});

	it('handles enlarge option', function (): void {
		$option = new CropAspectRatio(1.5, true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1.5', '1']);
	});
});
