<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Hashsum extends OptionAbstract {
	protected const NAME = 'hashsum';
	protected const ALIAS = 'hs';

	public function __construct(
		HashsumTypeEnum $type,
		string $hashsum,
	) {
		$this->setValues([$type, $hashsum]);
	}
}
