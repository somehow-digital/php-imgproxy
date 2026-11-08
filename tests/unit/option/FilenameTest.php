<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Filename;

describe('Filename', function (): void {
	it('handles basic option', function (): void {
		$option = new Filename('image.jpg');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['image.jpg']);
	});

	it('escapes the name', function (): void {
		$option = new Filename('my image/1.jpg');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['my%20image%2F1.jpg']);
	});

	it('encodes the name', function (): void {
		$option = new Filename('my image.jpg', true);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['bXkgaW1hZ2UuanBn', '1']);
	});
});
