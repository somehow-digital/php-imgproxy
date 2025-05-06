<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;

describe('ResizingType', function () {
	it('returns valid values', function () {
		$value = ResizingTypeEnum::FIT;

		$option = new ResizingType($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
