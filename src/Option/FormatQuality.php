<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class FormatQuality extends OptionAbstract
{
	protected const NAME = 'format_quality';

	protected const ALIAS = 'fq';

	/**
	 * @param array<string, int> $qualities
	 */
	public function __construct(
		array $qualities,
	) {
		if ($qualities === []) {
			throw new InvalidArgumentException('Parameter `qualities` must not be empty.');
		}

		$values = [];

		foreach ($qualities as $format => $quality) {
			$values[] = $format;
			$values[] = $quality;
		}

		$this->setValues($values);
	}
}
