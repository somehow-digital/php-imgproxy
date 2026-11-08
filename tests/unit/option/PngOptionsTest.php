<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\PngOptions;

describe('PngOptions', function (): void {
	it('handles basic option', function (): void {
		$option = new PngOptions();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles interlaced', function (): void {
		$option = new PngOptions(true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1']);
	});

	it('handles all options', function (): void {
		$option = new PngOptions(true, true, 64);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1', '1', '64']);
	});
});
