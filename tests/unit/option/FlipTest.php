<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Flip;

describe('Flip', function (): void {
	it('handles horizontal flip', function (): void {
		$option = new Flip(true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1']);
	});

	it('handles both directions', function (): void {
		$option = new Flip(true, true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['1', '1']);
	});

	it('handles vertical flip only', function (): void {
		$option = new Flip(false, true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['0', '1']);
	});
});
