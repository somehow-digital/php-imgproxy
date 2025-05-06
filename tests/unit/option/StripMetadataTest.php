<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\StripMetadata;

describe('StripMetadata', function () {
	it('handles basic option', function () {
		$value = true;

		$option = new StripMetadata();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
