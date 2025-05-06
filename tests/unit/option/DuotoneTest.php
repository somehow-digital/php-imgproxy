<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Duotone;

describe('Duotone', function () {
	it('handles basic options', function () {
		$values = [0.25, ['000000', 'ffffff']];
		$parameters = ['0.25', '000000', 'ffffff'];

		$option = new Duotone(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
