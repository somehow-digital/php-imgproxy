<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\CacheBuster;

describe('CacheBuster', function () {
	it('handles basic option', function () {
		$value = 'bust';

		$option = new CacheBuster($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$value]);
	});
});
