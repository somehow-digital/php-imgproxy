<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\VideoThumbnailAnimation;

describe('VideoThumbnailAnimation', function () {
	it('handles basic options', function () {
		$values = [0, 0, 0, 0, 0];
		$parameters = ['0', '0', '0', '0', '0'];

		$option = new VideoThumbnailAnimation(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles all options', function () {
		$values = [0, 0, 0, 0, 0, true, true, true, 0.0, 0.0];
		$parameters = ['0', '0', '0', '0', '0', '1', '1', '1', '0', '0'];

		$option = new VideoThumbnailAnimation(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
