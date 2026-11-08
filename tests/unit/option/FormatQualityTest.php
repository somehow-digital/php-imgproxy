<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\FormatQuality;

describe('FormatQuality', function (): void {
	it('handles basic option', function (): void {
		$option = new FormatQuality([]);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles qualities', function (): void {
		$option = new FormatQuality([
			'jpg' => 80,
			'webp' => 70,
		]);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['jpg', '80', 'webp', '70']);
	});
});
