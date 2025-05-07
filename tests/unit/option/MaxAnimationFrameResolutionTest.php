<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\MaxAnimationFrameResolution;

describe('MaxAnimationFrameResolution', function () {
	it('handles basic option', function () {
		$value = 5;
		$parameter = '5';

		$option = new MaxAnimationFrameResolution($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
