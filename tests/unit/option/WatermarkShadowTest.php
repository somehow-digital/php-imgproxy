<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkShadow;

describe('WatermarkShadow', function () {
	it('handles basic option', function () {
		$value = 10.0;

		$option = new WatermarkShadow($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
