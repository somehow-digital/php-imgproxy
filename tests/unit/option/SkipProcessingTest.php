<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\SkipProcessing;

describe('SkipProcessing', function () {
	it('returns valid values', function () {
		$values = ['jpg', 'png'];

		$option = new SkipProcessing(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($values);
	});
});
