<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\OptionInterface;
use SomehowDigital\ImgProxy\Utility\Url;

describe('Url::encode', function () {
	it('handles basic values', function ()  {
		$value = '=/test/123/+';
		$result = 'PS90ZXN0LzEyMy8r';

		$cast = Url::encode($value);

		expect($cast)->toBe($result);
	});
});

describe('Url::transform', function () {
	class TestOption implements OptionInterface
	{
		public function getName(): string
		{
			return 'test';
		}

		public function getAlias(): ?string
		{
			return 't';
		}

		public function getValues(): array
		{
			return ['test'];
		}

		public function getParameters(): array
		{
			return ['test'];
		}
	}

	enum TestEnum: string {
		case TEST = 'test';
	}

	it('handles string values', function ()  {
		$value = 'test123';

		$cast = Url::transform($value);

		expect($cast)->toBe($value);
	});

	it('handles integer values', function ()  {
		$value = 12345;
		$result = '12345';

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles float values', function ()  {
		$value = 12345.12345;
		$result = '12345.12345';

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles array values', function ()  {
		$value = [123, 123.123];
		$result = ['123', '123.123'];

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles Enum values', function ()  {
		$value = TestEnum::TEST;
		$result = TestEnum::TEST->value;

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles Option values', function ()  {
		$value = new TestOption();
		$result = $value->getParameters();

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});
});
