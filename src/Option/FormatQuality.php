<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

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
		$values = [];

		foreach ($qualities as $format => $quality) {
			$values[] = $format;
			$values[] = $quality;
		}

		$this->setValues($values);
	}
}
