<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\AutoRotate;

describe('AutoRotate', function () {
	it('handles basic option', function () {
		$value = true;
		$parameter = '1';

		$option = new AutoRotate();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
