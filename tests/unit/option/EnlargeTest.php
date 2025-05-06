<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Enlarge;

describe('Enlarge', function () {
	it('handles basic option', function () {
		$value = true;

		$option = new Enlarge();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
