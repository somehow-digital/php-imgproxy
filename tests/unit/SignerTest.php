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

	it('truncates the signature to the size', function (): void {
		$signer = new Signer('6daee8c3cb3b7961', '2e380f48e1e7cdef', 8);

		expect($signer->sign('test'))->toBe('vqCQfPU-RpQ');
	});

	it('rejects a size out of range', function (int $size): void {
		expect(fn(): Signer => new Signer('6daee8c3cb3b7961', '2e380f48e1e7cdef', $size))->toThrow(InvalidArgumentException::class);
	})->with([[0], [33]]);

	it('accepts the boundary sizes', function (int $size): void {
		expect(new Signer('6daee8c3cb3b7961', '2e380f48e1e7cdef', $size))->toBeInstanceOf(Signer::class);
	})->with([[1], [32]]);

	it('rejects a key that is not hexadecimal', function (): void {
		expect(fn(): Signer => new Signer('invalid', '2e380f48e1e7cdef'))->toThrow(InvalidArgumentException::class);
	});

	it('rejects a salt that is not hexadecimal', function (): void {
		expect(fn(): Signer => new Signer('6daee8c3cb3b7961', 'invalid'))->toThrow(InvalidArgumentException::class);
	});
});
