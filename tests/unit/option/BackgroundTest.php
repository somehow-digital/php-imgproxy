<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Background;

describe('Background', function () {
	it('handles RGB color', function () {
		$values = [100, 0, 255];

		$option = new Background(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('handles HEX color', function () {
		$value = 'ff0000';

		$option = new Background($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
