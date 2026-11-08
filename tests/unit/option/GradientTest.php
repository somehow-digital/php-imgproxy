<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Gradient;

describe('Gradient', function (): void {
	it('handles basic option', function (): void {
		$option = new Gradient(0.5);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5']);
	});

	it('handles color', function (): void {
		$option = new Gradient(0.5, 'ff0000');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5', 'ff0000']);
	});

	it('handles direction name', function (): void {
		$option = new Gradient(0.5, 'ff0000', 'up');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5', 'ff0000', 'up']);
	});

	it('handles all options', function (): void {
		$option = new Gradient(0.5, 'ff0000', 'up', 0.2, 0.8);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0.5', 'ff0000', 'up', '0.2', '0.8']);
	});

	it('keeps a skipped color in place', function (): void {
		$option = new Gradient(0.5, null, 45);

		expect($option->getParameters())->toBe(['0.5', '', '45']);
	});
});
