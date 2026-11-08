<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Format;
use SomehowDigital\ImgProxy\Option\FormatEnum;

describe('Format', function (): void {
	it('handles enum value', function (): void {
		$value = FormatEnum::BEST;
		$parameter = 'best';

		$option = new Format($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles string value', function (): void {
		$value = FormatEnum::BEST;

		$option = new Format($value->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$value->value]);
	});
});
