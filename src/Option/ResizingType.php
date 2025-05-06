<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ResizingType extends OptionAbstract {
	protected const NAME = 'resizing_type';
	protected const ALIAS = 'rt';

	public function __construct(
		ResizingTypeEnum $type,
	) {
		$this->setValues([$type]);
	}
}
