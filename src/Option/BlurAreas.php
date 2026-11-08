<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class BlurAreas extends OptionAbstract
{
	protected const NAME = 'blur_areas';

	protected const ALIAS = 'ba';

	/**
	 * @param list<float> ...$areas
	 */
	public function __construct(
		float $sigma,
		array ...$areas,
	) {
		foreach ($areas as $area) {
			if (count($area) !== 4) {
				throw new InvalidArgumentException('Each area must consist of left, top, width and height.');
			}
		}

		$this->setValues([$sigma, ...$areas]);
	}
}
