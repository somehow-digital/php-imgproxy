<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\AvifOptions;

describe('AvifOptions', function (): void {
	it('handles basic option', function (): void {
		$option = new AvifOptions();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe([]);
	});

	it('handles subsample', function (): void {
		$option = new AvifOptions('on');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['on']);
	});
});
