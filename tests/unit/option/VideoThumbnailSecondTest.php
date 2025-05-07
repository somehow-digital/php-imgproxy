<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\VideoThumbnailSecond;

describe('VideoThumbnailSecond', function () {
	it('handles basic option', function () {
		$value = 0;
		$parameter = '0';

		$option = new VideoThumbnailSecond($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('throws exception for invalid value', function () {
		$value = -1;

		expect(fn () => new VideoThumbnailSecond($value))->toThrow(InvalidArgumentException::class);
	});
});
