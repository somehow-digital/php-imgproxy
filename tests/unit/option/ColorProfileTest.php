<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ColorProfile;

describe('ColorProfile', function (): void {
	it('handles built-in profile', function (): void {
		$option = new ColorProfile('srgb');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['srgb']);
	});

	it('encodes a custom profile', function (): void {
		$option = new ColorProfile('my profile.icc');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['my%20profile.icc']);
	});
});
