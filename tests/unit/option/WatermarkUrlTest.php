<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkUrl;

describe('WatermarkUrl', function () {
	it('handles basic option', function () {
		$value = 'https://localhost/image.jpg';

		$option = new WatermarkUrl($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
