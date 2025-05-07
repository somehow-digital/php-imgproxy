<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;

describe('ResizingType', function () {
	it('handles basic option', function () {
		$value = ResizingTypeEnum::FIT;
		$parameter = $value->value;

		$option = new ResizingType($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
