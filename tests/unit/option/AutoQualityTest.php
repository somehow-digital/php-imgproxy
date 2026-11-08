<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\AutoQuality;

describe('AutoQuality', function (): void {
	it('handles basic option', function (): void {
		$option = new AutoQuality();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles method', function (): void {
		$option = new AutoQuality('size');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['size']);
	});

	it('handles all options', function (): void {
		$option = new AutoQuality('size', 100000.0, 20, 80, 5.0);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['size', '100000', '20', '80', '5']);
	});
});
