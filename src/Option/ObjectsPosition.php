<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ObjectsPosition extends OptionAbstract {
	protected const NAME = 'objects_position';
	protected const ALIAS = 'op';

	public function __construct(
		ObjectsPositionTypeEnum | string $type,
		?float $horizontal = null,
		?float $vertical = null,
	) {
		$type = is_string($type) ? ObjectsPositionTypeEnum::from($type) : $type;

		$this->setValues([$type, $horizontal, $vertical]);
	}
}
