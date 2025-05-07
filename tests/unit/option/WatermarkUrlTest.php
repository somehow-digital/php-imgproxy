<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkUrl;

describe('WatermarkUrl', function () {
	it('handles basic option', function () {
		$value = 'https://localhost/image.jpg';
		$parameter = 'aHR0cHM6Ly9sb2NhbGhvc3QvaW1hZ2UuanBn';

		$option = new WatermarkUrl($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
