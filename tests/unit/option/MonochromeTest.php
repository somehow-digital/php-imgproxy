<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Monochrome;

describe('Monochrome', function (): void {
	it('handles basic options', function (): void {
		$values = [0.25, '000000'];
		$parameters = ['0.25', '000000'];

		$option = new Monochrome(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
