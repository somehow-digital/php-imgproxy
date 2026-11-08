<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkText;

describe('WatermarkText', function (): void {
	it('handles basic option', function (): void {
		$value = 'watermark';
		$parameter = 'd2F0ZXJtYXJr';

		$option = new WatermarkText($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
