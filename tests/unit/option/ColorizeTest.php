<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Colorize;

describe('Colorize', function (): void {
	it('handles basic option', function (): void {
		$option = new Colorize(0.5);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5']);
	});

	it('handles color', function (): void {
		$option = new Colorize(0.5, 'ff0000');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5', 'ff0000']);
	});

	it('handles all options', function (): void {
		$option = new Colorize(0.5, 'ff0000', true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5', 'ff0000', '1']);
	});
});
