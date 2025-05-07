<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\MaskerInterface;
use SomehowDigital\ImgProxy\Option\FormatEnum;
use SomehowDigital\ImgProxy\Option\OptionInterface;
use SomehowDigital\ImgProxy\Signer\SignerInterface;
use SomehowDigital\ImgProxy\Url;

describe('Url', function () {
	beforeEach(function () {
		$this->masker = Mockery::mock(MaskerInterface::class);
		$this->masker->shouldReceive('mask')->andReturn('masked');
		$this->masker->shouldReceive('getPathPrefix')->andReturn('prefix');
		$this->masker->shouldReceive('getFormatSeparator')->andReturn('.');

		$this->signer = Mockery::mock(SignerInterface::class);
		$this->signer->shouldReceive('sign')->andReturn('signature');

		$this->width = Mockery::mock(OptionInterface::class);
		$this->width->shouldReceive('getAlias')->andReturn('w');
		$this->width->shouldReceive('getParameters')->andReturn(['100']);

		$this->height = Mockery::mock(OptionInterface::class);
		$this->height->shouldReceive('getAlias')->andReturn('h');
		$this->height->shouldReceive('getParameters')->andReturn(['100']);

		$this->enlarge = Mockery::mock(OptionInterface::class);
		$this->enlarge->shouldReceive('getAlias')->andReturn('el');
		$this->enlarge->shouldReceive('getParameters')->andReturn(['1']);

		$this->crop = Mockery::mock(OptionInterface::class);
		$this->crop->shouldReceive('getAlias')->andReturn('c');
		$this->crop->shouldReceive('getParameters')->andReturn(['100', '100']);
	});

	afterEach(function () {
		Mockery::close();
	});

	it('builds basic URL', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = new Url();
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build())->toBe($result);
	});

	it('builds basic URL with custom format', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg@png';

		$url = new Url();
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build(FormatEnum::PNG))->toBe($result);
	});

	it('builds basic URL with multiple option calls', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = new Url();
		$url = $url->source($source);

		$url = $url->options($this->width);
		$url = $url->options($this->height);
		$url = $url->options($this->enlarge);

		expect($url->build())->toBe($result);
	});

	it('builds basic URL with masked source', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/prefix/masked';

		$url = new Url($this->masker);
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build())->toBe($result);
	});

	it('builds basic URL with masked source and custom format', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/prefix/masked.heic';

		$url = new Url($this->masker);
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build(FormatEnum::HEIC))->toBe($result);
	});

	it('builds signed URL', function () {
		$source = 'https://localhost/image.jpg';
		$result = 'signature/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = new Url(null, $this->signer);
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build())->toBe($result);
	});

	it('builds signed URL with masked source', function () {
		$source = 'https://localhost/image.jpg';
		$result = 'signature/w:100/h:100/el:1/prefix/masked';

		$url = new Url($this->masker, $this->signer);
		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect($url->build())->toBe($result);
	});

	it('builds basic URL with chained pipelines', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/c:100:100/-/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = new Url();
		$url = $url->source($source);

		$url = $url->options(
			$this->crop,
			[
				$this->width,
				$this->height,
				$this->enlarge,
			],
		);

		expect($url->build())->toBe($result);
	});

	it('builds basic URL with multiple chained pipelines', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/c:100:100/-/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = new Url();
		$url = $url->source($source);

		$url = $url->options(
			$this->crop,
		);

		$url = $url->options([
			$this->width,
			$this->height,
			$this->enlarge,
		]);

		expect($url->build())->toBe($result);
	});

	it('instantiates with static method', function () {
		$source = 'https://localhost/image.jpg';
		$result = '_/w:100/h:100/el:1/plain/https%3A%2F%2Flocalhost%2Fimage.jpg';

		$url = Url::create()
			->source($source)
			->options(
				$this->width,
				$this->height,
				$this->enlarge,
			);

		expect($url->build())->toBe($result);
	});

	it('throws exception for unsupported format', function () {
		$source = 'https://localhost/image.jpg';

		$url = new Url();

		$url = $url->source($source);

		$url = $url->options(
			$this->width,
			$this->height,
			$this->enlarge,
		);

		expect(fn () => $url->build('exe'))->toThrow(ValueError::class);
	});
});
