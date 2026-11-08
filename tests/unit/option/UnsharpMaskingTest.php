<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\UnsharpMasking;

describe('UnsharpMasking', function (): void {
	it('handles basic option', function (): void {
		$option = new UnsharpMasking();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles mode', function (): void {
		$option = new UnsharpMasking('always');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['always']);
	});

	it('handles all options', function (): void {
		$option = new UnsharpMasking('always', 0.5, 2.0);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['always', '0.5', '2']);
	});
});
