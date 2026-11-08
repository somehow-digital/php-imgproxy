<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Signer\Signer;

describe('Signer', function (): void {
	it('signs', function (): void {
		$value = 'test';
		$result = 'vqCQfPU-RpS0pifBva4XHGFJH82PrBO5VMBCWJdUktA';

		$signer = new Signer('6daee8c3cb3b7961', '2e380f48e1e7cdef');
		$signature = $signer->sign($value);

		expect($signature)->toBe($result);
	});

	it('rejects a key that is not hexadecimal', function (): void {
		expect(fn(): Signer => new Signer('invalid', '2e380f48e1e7cdef'))->toThrow(InvalidArgumentException::class);
	});

	it('rejects a salt that is not hexadecimal', function (): void {
		expect(fn(): Signer => new Signer('6daee8c3cb3b7961', 'invalid'))->toThrow(InvalidArgumentException::class);
	});
});
