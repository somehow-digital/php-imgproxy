<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

enum HashsumTypeEnum: string {
	    case NONE = 'none';
	    case MD5 = 'md5';
	    case SHA1 = 'sha1';
	    case SHA2566 = 'sha256';
	    case SHA512 = 'sha512';
}
