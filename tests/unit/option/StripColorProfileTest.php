<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\StripColorProfile;

describe('StripColorProfile', function () {
	it('handles default option', function () {
		$value = true;
		$parameter = '1';

		$option = new StripColorProfile();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles explicit true option', function () {
		$value = true;
		$parameter = '1';

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles explicit false option', function () {
		$value = false;
		$parameter = '0';

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
