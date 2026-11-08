# Changelog

## [Unreleased]

### Added

- A license file.
- A security workflow.
- Quality tooling: coding standard, refactoring, static analysis, architecture, dependency, coverage and mutation checks, run by the `check` Composer script.
- Checks and tests workflows, and zizmor in the security workflow.
- `Utility\Hex`, which decodes hexadecimal keys.

### Changed

- PHP 8.2 or newer is required.
- `Signer` and `EncryptionMasker` throw an `InvalidArgumentException` for keys that are not hexadecimal, instead of raising a warning.
- `Url` leaves out empty parts of a path by comparing strictly, so a source of `0` is no longer dropped.
- The code follows PER-CS.

### Fixed

- `Crop` accepts relative sizes (below 1) by taking its width and height as floats.
- Skipped optional arguments no longer shift the following arguments of an option, e.g. `Resize` without a type or `Trim` without a color. Only trailing empty arguments are left out.
- `Url` signs the path including its leading slash, as imgproxy expects.

## [1.0.0] - 2026-02-20

### Added

- Initial release: an immutable URL builder with all imgproxy options, pipelines, source masking and URL signing.
- The `Format` utility, and an option for the image quality.

### Fixed

- The path prefix of the encoding masker.

[Unreleased]: https://github.com/somehow-digital/php-imgproxy/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/somehow-digital/php-imgproxy/releases/tag/v1.0.0
