<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkRotate;

describe('WatermarkUrl', function () {
	it('handles basic option', function () {
		$value = 90.0;

		$option = new WatermarkRotate($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
