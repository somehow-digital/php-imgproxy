<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Utility\Format;

describe('Format::supports', function () {
	it('supports standard formats', function () {
		expect(Format::supports('png'))->toBeTrue();
		expect(Format::supports('jpg'))->toBeTrue();
		expect(Format::supports('jpeg'))->toBeTrue();
		expect(Format::supports('webp'))->toBeTrue();
		expect(Format::supports('avif'))->toBeTrue();
		expect(Format::supports('gif'))->toBeTrue();
		expect(Format::supports('ico'))->toBeTrue();
		expect(Format::supports('svg'))->toBeTrue();
		expect(Format::supports('heic'))->toBeTrue();
		expect(Format::supports('bmp'))->toBeTrue();
		expect(Format::supports('tiff'))->toBeTrue();
		expect(Format::supports('tif'))->toBeTrue();
		expect(Format::supports('jxl'))->toBeTrue();
	});

	it('does not support pro formats without flag', function () {
		expect(Format::supports('pdf'))->toBeFalse();
		expect(Format::supports('psd'))->toBeFalse();
		expect(Format::supports('mp4'))->toBeFalse();
	});

	it('supports pro formats with flag', function () {
		expect(Format::supports('pdf', true))->toBeTrue();
		expect(Format::supports('psd', true))->toBeTrue();
		expect(Format::supports('mp4', true))->toBeTrue();
	});

	it('does not support unknown formats', function () {
		expect(Format::supports('unknown'))->toBeFalse();
	});
});
