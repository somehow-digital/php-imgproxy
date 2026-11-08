<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\OptionInterface;
use SomehowDigital\ImgProxy\Utility\Url;

describe('Url::encode', function (): void {
	it('handles basic values', function (): void {
		$value = '=/test/123/+';
		$result = 'PS90ZXN0LzEyMy8r';

		$cast = Url::encode($value);

		expect($cast)->toBe($result);
	});
});

describe('Url::transform', function (): void {
	class TestOption implements OptionInterface
	{
		public function getName(): string
		{
			return 'test';
		}

		public function getAlias(): string
		{
			return 't';
		}

		/**
		 * @return list<string>
		 */
		public function getValues(): array
		{
			return ['test'];
		}

		/**
		 * @return list<string>
		 */
		public function getParameters(): array
		{
			return ['test'];
		}
	}

	enum TestEnum: string
	{
		case TEST = 'test';
	}

	it('handles string values', function (): void {
		$value = 'test123';

		$cast = Url::transform($value);

		expect($cast)->toBe($value);
	});

	it('handles integer values', function (): void {
		$value = 12345;
		$result = '12345';

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles float values', function (): void {
		$value = 12345.12345;
		$result = '12345.12345';

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles array values', function (): void {
		$value = [123, 123.123];
		$result = ['123', '123.123'];

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles Enum values', function (): void {
		$value = TestEnum::TEST;
		$result = TestEnum::TEST->value;

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles Option values', function (): void {
		$value = new TestOption();
		$result = $value->getParameters();

		$cast = Url::transform($value);

		expect($cast)->toBe($result);
	});

	it('handles stringable values', function (): void {
		$value = new class() implements Stringable {
			public function __toString(): string
			{
				return 'stringable';
			}
		};

		expect(Url::transform($value))->toBe('stringable');
	});

	it('handles unsupported values', function (): void {
		expect(Url::transform(new stdClass()))->toBe('');
		expect(Url::transform(null))->toBe('');
	});
});
