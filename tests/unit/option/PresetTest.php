<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Preset;

describe('Preset', function () {
	it('handles basic option', function () {
		$values = ['sharpen', 'enlarge'];

		$option = new Preset(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
