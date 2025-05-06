<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Expires;

describe('Expires', function () {
	it('returns valid values', function () {
		$value = time();

		$option = new Expires($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
