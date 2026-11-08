<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\StripColorProfile;

describe('StripColorProfile', function (): void {
	it('handles default option', function (): void {
		$value = true;
		$parameter = '1';

		$option = new StripColorProfile();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles explicit true option', function (): void {
		$value = true;
		$parameter = '1';

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles explicit false option', function (): void {
		$value = false;
		$parameter = '0';

		$option = new StripColorProfile($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
