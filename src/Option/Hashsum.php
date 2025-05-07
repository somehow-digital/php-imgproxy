<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Hashsum extends OptionAbstract {
	protected const NAME = 'hashsum';
	protected const ALIAS = 'hs';

	public function __construct(
		HashsumTypeEnum | string $type,
		string $hashsum,
	) {
		$type = is_string($type) ? HashsumTypeEnum::from($type) : $type;

		$this->setValues([$type, $hashsum]);
	}
}
