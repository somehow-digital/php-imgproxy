<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\CacheBuster;

describe('CacheBuster', function () {
	it('returns valid values', function () {
		$value = 'bust';

		$option = new CacheBuster($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
