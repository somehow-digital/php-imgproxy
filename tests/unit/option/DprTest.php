<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Dpr;

describe('Dpr', function (): void {
	it('handles basic option', function (): void {
		$value = 1.5;
		$parameter = '1.5';

		$option = new Dpr($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
