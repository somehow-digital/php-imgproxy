<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\StripColorProfile;

describe('StripColorProfile', function () {
	it('handles default option', function () {
		$value = true;

		$option = new StripColorProfile();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles explicit true option', function () {
		$value = true;

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});

	it('handles explicit false option', function () {
		$value = false;

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
