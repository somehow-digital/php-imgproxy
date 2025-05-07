<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\WatermarkSize;

describe('WatermarkSize', function () {
	it('handles basic option', function () {
		$values = [100, 100];
		$parameters = ['100', '100'];

		$option = new WatermarkSize(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
