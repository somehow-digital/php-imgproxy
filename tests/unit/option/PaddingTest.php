<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Padding;

describe('Padding', function () {
	it('handles single option', function () {
		$values =  [4];

		$option = new Padding(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('handles all options', function () {
		$values =  [4, 1, 2, 5];

		$option = new Padding(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
