<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\BackgroundAlpha;

describe('BackgroundAlpha', function () {
	it('returns valid values', function () {
		$value = 0.25;

		$option = new BackgroundAlpha($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
