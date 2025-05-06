<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkText;

describe('WatermarkUrl', function () {
	it('handles basic option', function () {
		$value = 'watermark';

		$option = new WatermarkText($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
