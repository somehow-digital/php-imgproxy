<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WebpOptions;

describe('WebpOptions', function (): void {
	it('handles basic option', function (): void {
		$option = new WebpOptions();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles compression', function (): void {
		$option = new WebpOptions('lossless');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['lossless']);
	});

	it('handles all options', function (): void {
		$option = new WebpOptions('lossless', true, 'photo');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['lossless', '1', 'photo']);
	});
});
