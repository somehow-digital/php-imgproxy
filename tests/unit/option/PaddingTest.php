<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Padding;

describe('Padding', function () {
	it('handles single option', function () {
		$values =  [4];
		$parameters = ['4'];

		$option = new Padding(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles all options', function () {
		$values =  [4, 1, 2, 5];
		$parameters = ['4', '1', '2', '5'];

		$option = new Padding(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
