<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Trim;

describe('Trim', function () {
	it('handles basic option', function () {
		$value = 1.0;

		$option = new Trim($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles color option', function () {
		$values = [0.5, 'ff0000'];

		$option = new Trim(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('handles advanced options', function () {
		$values = [0.5, 'ff0000', true, true];

		$option = new Trim(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
