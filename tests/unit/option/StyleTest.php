<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Style;

describe('Style', function (): void {
	it('handles basic option', function (): void {
		$value = 'color: red;';
		$parameter = 'Y29sb3I6IHJlZDs';

		$option = new Style($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
