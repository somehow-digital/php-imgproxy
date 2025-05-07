<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ResizingAlgorithm extends OptionAbstract {
	protected const NAME = 'resizing_algorithm';
	protected const ALIAS = 'ra';

	public function __construct(
		ResizingAlgorithmEnum | string $algorithm,
	) {
		$algorithm = is_string($algorithm) ? ResizingAlgorithmEnum::from($algorithm) : $algorithm;

		$this->setValues([$algorithm]);
	}
}
