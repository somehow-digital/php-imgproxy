<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Height;

describe('Height', function (): void {
	it('handles basic option', function (): void {
		$value = 12345;
		$parameter = '12345';

		$option = new Height($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
