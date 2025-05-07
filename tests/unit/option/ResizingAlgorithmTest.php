<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ResizingAlgorithm;
use SomehowDigital\ImgProxy\Option\ResizingAlgorithmEnum;

describe('ResizingAlgorithm', function () {
	it('handles enum value', function () {
		$value = ResizingAlgorithmEnum::CUBIC;
		$parameter = $value->value;

		$option = new ResizingAlgorithm($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles string value', function () {
		$value = ResizingAlgorithmEnum::CUBIC;
		$parameter = $value->value;

		$option = new ResizingAlgorithm($value->value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
