<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Filename;

describe('Filename', function (): void {
	it('sends the name Base64-encoded', function (): void {
		$option = new Filename('my image.jpg');

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getParameters())->toBe(['bXkgaW1hZ2UuanBn', '1']);
	});
});
