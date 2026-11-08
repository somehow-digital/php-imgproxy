<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\EncodingMasker;
use SomehowDigital\ImgProxy\Masker\MaskerInterface;
use SomehowDigital\ImgProxy\Option\FormatEnum;
use SomehowDigital\ImgProxy\Option\OptionAbstract;
use SomehowDigital\ImgProxy\Option\Raw;
use SomehowDigital\ImgProxy\Signer\SignerInterface;
use SomehowDigital\ImgProxy\Url;

describe('Url fallbacks', function (): void {
	afterEach(function (): void {
		Mockery::close();
	});

	it('builds with the defaults', function (): void {
		$url = (new Url())->source('a');

		expect($url->build())->toBe('_/plain/a');
	});

	it('builds without a source', function (): void {
		expect((new Url())->build())->toBe('_/plain');
	});

	it('falls back when the masker and the signer return empty values', function (): void {
		/** @var MaskerInterface&Mockery\MockInterface $masker */
		$masker = Mockery::mock(MaskerInterface::class);
		$masker->shouldReceive('mask')->andReturn('');
		$masker->shouldReceive('getPathPrefix')->andReturn('');
		$masker->shouldReceive('getFormatSeparator')->andReturn('');

		/** @var SignerInterface&Mockery\MockInterface $signer */
		$signer = Mockery::mock(SignerInterface::class);
		$signer->shouldReceive('sign')->andReturn('');

		$url = (new Url($masker, $signer))->source('a b');

		expect($url->build(FormatEnum::PNG))->toBe('_/a%20b@png');
	});

	it('leaves out the empty path prefix of a masker', function (): void {
		$url = (new Url(new EncodingMasker()))->source('a');

		expect($url->build())->toBe('_/YQ');
	});

	it('groups a leading pipeline without empty groups', function (): void {
		$url = (new Url())->source('a')->options([new Raw()]);

		expect($url->build())->toBe('_/raw:1/plain/a');
	});

	it('filters empty option values', function (): void {
		$option = new class() extends OptionAbstract {
			public function __construct()
			{
				$this->setValues(['', null, 'a']);
			}
		};

		expect($option->getValues())->toBe([
			2 => 'a',
		]);
	});
});
