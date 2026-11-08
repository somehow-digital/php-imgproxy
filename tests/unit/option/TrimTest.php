<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Trim;

describe('Trim', function (): void {
	it('handles basic option', function (): void {
		$value = 1.0;
		$parameter = '1';

		$option = new Trim($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles color option', function (): void {
		$values = [0.5, 'ff0000'];
		$parameters = ['0.5', 'ff0000'];

		$option = new Trim(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles advanced options', function (): void {
		$values = [0.5, 'ff0000', true, true];
		$parameters = ['0.5', 'ff0000', '1', '1'];

		$option = new Trim(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('keeps skipped arguments in place', function (): void {
		$option = new Trim(0.5, null, true);

		expect($option->getParameters())->toBe(['0.5', '', '1']);
	});
});
