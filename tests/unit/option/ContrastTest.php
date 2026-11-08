<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Contrast;

describe('Contrast', function (): void {
	it('handles basic option', function (): void {
		$value = 2.0;
		$parameter = '2';

		$option = new Contrast($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
