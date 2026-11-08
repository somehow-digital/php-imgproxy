<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class Style extends OptionAbstract
{
	protected const NAME = 'style';
	protected const ALIAS = 'st';

	public function __construct(
		string $style,
	) {
		$this->setValues([$style]);
	}

	/**
	 * @return list<string>
	 */
	public function getParameters(): array
	{
		return array_map(Url::encode(...), parent::getParameters());
	}
}
