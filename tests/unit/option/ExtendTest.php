<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Extend;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\GravityFocusPoint;
use SomehowDigital\ImgProxy\Option\GravityObject;
use SomehowDigital\ImgProxy\Option\GravityObjectWeight;
use SomehowDigital\ImgProxy\Option\GravitySmart;

describe('Extend', function (): void {
	it('handles basic option', function (): void {
		$value = true;
		$parameter = '1';

		$option = new Extend();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});

	it('handles gravity option', function (): void {
		$values = [true, new Gravity(GravityEnum::WEST)];
		$parameters = ['1', 'we'];

		$option = new Extend(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('rejects gravities the extension cannot use', function (Gravity $gravity): void {
		expect(fn(): Extend => new Extend(true, $gravity))->toThrow(InvalidArgumentException::class);
	})->with([
		'smart' => [new GravitySmart()],
		'object' => [new GravityObject('face')],
		'object weight' => [new GravityObjectWeight(['face', 1])],
	]);

	it('accepts a focus point gravity', function (): void {
		$option = new Extend(true, new GravityFocusPoint(0.5, 0.5));

		expect($option->getParameters())->toBe(['1', 'fp', '0.5', '0.5']);
	});
});
