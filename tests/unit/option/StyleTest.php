<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Style;

describe('Style', function () {
	it('handles basic option', function () {
		$value = 'color: red;';

		$option = new Style($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
