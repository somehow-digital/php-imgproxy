<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Format;
use SomehowDigital\ImgProxy\Option\FormatEnum;

describe('Format', function () {
	it('returns valid values', function () {
		$value = FormatEnum::BEST;

		$option = new Format($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
