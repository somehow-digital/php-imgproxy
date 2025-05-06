<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Enlarge;
use SomehowDigital\ImgProxy\Option\Extend;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Size;
use SomehowDigital\ImgProxy\Option\Width;

describe('Size', function () {
	it('returns valid values', function () {
		$values = [
			new Width(100),
			new Height(100),
			new Enlarge(true),
			new Extend(true),
		];

		$parameters = [
			'100',
			'100',
			'1',
			'1',
		];

		$option = new Size(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
