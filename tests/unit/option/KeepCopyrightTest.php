<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\KeepCopyright;

describe('KeepCopyright', function (): void {
	it('handles basic option', function (): void {
		$value = true;
		$parameter = '1';

		$option = new KeepCopyright();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
