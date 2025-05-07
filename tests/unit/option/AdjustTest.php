<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Adjust;
use SomehowDigital\ImgProxy\Option\Brightness;
use SomehowDigital\ImgProxy\Option\Contrast;
use SomehowDigital\ImgProxy\Option\Saturation;

describe('Adjust', function () {
	it('returns valid values', function () {
		$values = [
			new Brightness(100),
			new Contrast(100),
			new Saturation(100),
		];

		$parameters = [
			'100',
			'100',
			'100',
		];

		$option = new Adjust(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
