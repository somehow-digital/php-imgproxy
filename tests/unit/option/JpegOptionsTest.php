<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\JpegOptions;

describe('JpegOptions', function (): void {
	it('handles basic option', function (): void {
		$option = new JpegOptions();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles progressive', function (): void {
		$option = new JpegOptions(true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1']);
	});

	it('handles all options', function (): void {
		$option = new JpegOptions(true, false, true, false, true, 3);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1', '0', '1', '0', '1', '3']);
	});
});
