<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\PreserveHdr;

describe('PreserveHdr', function (): void {
	it('handles basic option', function (): void {
		$option = new PreserveHdr();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([true]);
		expect($option->getParameters())->toBe(['1']);
	});

	it('handles disabled option', function (): void {
		$option = new PreserveHdr(false);

		expect($option->getValues())->toBe([false]);
		expect($option->getParameters())->toBe(['0']);
	});
});
