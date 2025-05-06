<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\ResizingAlgorithm;
use SomehowDigital\ImgProxy\Option\ResizingAlgorithmEnum;

describe('ResizingAlgorithm', function () {
	it('returns valid values', function () {
		$value = ResizingAlgorithmEnum::CUBIC;

		$option = new ResizingAlgorithm($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
