<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return ECSConfig::configure()
	->withPaths([
		__DIR__ . '/src',
		__DIR__ . '/tests',
	])
	->withRootFiles()
	->withFileExtensions(['php'])
	->withPreparedSets(
		perCs: true,
		arrays: true,
		comments: true,
		docblocks: true,
		spaces: true,
		namespaces: true,
		controlStructures: true,
		casing: true,
		cleanup: true,
		cleanCode: true,
	)
	->withRules([DeclareStrictTypesFixer::class])
	// Constants are left out, so related ones stay grouped.
	->withConfiguredRule(ClassAttributesSeparationFixer::class, [
		'elements' => [
			'method' => 'one',
			'property' => 'one',
		],
	])
	// Allows one-line docblocks on constants and properties.
	->withConfiguredRule(PhpdocLineSpanFixer::class, [
		'const' => null,
		'property' => null,
	])
	->withSpacing(Option::INDENTATION_TAB, "\n")
	->withParallel();
