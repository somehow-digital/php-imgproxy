<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Zoom;

describe('Zoom', function () {
	it('handles basic option', function () {
		$values = [2.0, 4.0];
		$parameters = ['2', '4'];

		$option = new Zoom(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('accepts single factor', function () {
		$value = 2.0;
		$parameter = '2';

		$option = new Zoom($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
