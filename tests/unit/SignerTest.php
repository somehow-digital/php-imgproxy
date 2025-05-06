<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Signer\Signer;

describe('Signer', function () {
	it('signs', function () {
		$value = 'test';
		$result = 'vqCQfPU-RpS0pifBva4XHGFJH82PrBO5VMBCWJdUktA';

		$signer = new Signer('6daee8c3cb3b7961', '2e380f48e1e7cdef');
		$signature = $signer->sign($value);

		expect($signature)->toBe($result);
	});
});
