<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Duotone extends OptionAbstract
{
	protected const NAME = 'duotone';
	protected const ALIAS = 'dt';

	/**
	 * @param list<string>|null $colors
	 */
	public function __construct(
		float $intensity,
		?array $colors = null,
	) {
		$this->setValues([$intensity, $colors]);
	}
}
