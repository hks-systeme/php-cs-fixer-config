# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

For a full diff see [`2.0.0...main`][2.0.0...main].

## [`2.0.0`][2.0.0]

For a full diff see [`1.1.0...2.0.0`][1.1.0...2.0.0].

### Changed

* Updated `friendsofphp/php-cs-fixer` ([#71]), by [@localheinz]
* Configured `trailing_comma_in_multiline` fixer to add trailing commas for arguments in `Php73`, `Php74`, and `Php80` rule sets ([#74]), by [@localheinz]
* Configured `trailing_comma_in_multiline` fixer to add trailing commas for parameters in `Php80` rule set ([#75]), by [@localheinz]

## [`1.1.0`][1.1.0]

For a full diff see [`1.0.3...1.1.0`][1.0.3...1.1.0].

### Changed

* Updated `friendsofphp/php-cs-fixer` ([#67]), by [@dependabot]

## [`1.0.3`][1.0.3]

For a full diff see [`1.0.2...1.0.3`][1.0.2...1.0.3].

### Fixed

* Updated `friendsofphp/php-cs-fixer` ([#59]), by [@dependabot]

## [`1.0.2`][1.0.2]

For a full diff see [`1.0.1...1.0.2`][1.0.1...1.0.2].

### Fixed

* Updated `friendsofphp/php-cs-fixer` ([#51]), by [@dependabot]

## [`1.0.1`][1.0.1]

For a full diff see [`1.0.0...1.0.1`][1.0.0...1.0.1].

### Fixed

* Stopped using deprecated configuration for `class_attributes_separation` fixer ([#15]), by [@localheinz]
* Updated `friendsofphp/php-cs-fixer` ([#41]), by [@dependabot]

## [`1.0.0`][1.0.0]

For a full diff see [`3a0205c...1.0.0`][3a0205c...1.0.0].

### Added

* Added `Php80` ([#4]), by [@localheinz]
* Added `Php71`, `Php72`, `Php73`, and `Php74` ([#1]), by [@localheinz]

### Changed

* Configured `no_whitespace_before_comma_in_array` fixer to remove whitespace between heredoc and comma ([#5]), by [@localheinz]
* Configured `trailing_comma_in_multiline_array` fixer to add a trailing comma after heredoc in multi-line array ([#6]), by [@localheinz]

[1.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.0
[1.0.1]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.1
[1.0.2]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.2
[1.0.3]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.3
[1.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.1.0
[2.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.0.0

[3a0205c...1.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/3a0205c...1.0.0
[1.0.0...1.0.1]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.0...1.0.1
[1.0.1...1.0.2]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.1...1.0.2
[1.0.2...1.0.3]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.2...1.0.3
[1.0.3...1.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.3...1.1.0
[1.1.0...2.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.1.0...2.0.0
[2.0.0...main]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.0.0...main

[#1]: https://github.com/hks-systeme/php-cs-fixer-config/pull/1
[#4]: https://github.com/hks-systeme/php-cs-fixer-config/pull/4
[#5]: https://github.com/hks-systeme/php-cs-fixer-config/pull/5
[#6]: https://github.com/hks-systeme/php-cs-fixer-config/pull/6
[#15]: https://github.com/hks-systeme/php-cs-fixer-config/pull/15
[#41]: https://github.com/hks-systeme/php-cs-fixer-config/pull/41
[#51]: https://github.com/hks-systeme/php-cs-fixer-config/pull/51
[#59]: https://github.com/hks-systeme/php-cs-fixer-config/pull/59
[#67]: https://github.com/hks-systeme/php-cs-fixer-config/pull/67
[#71]: https://github.com/hks-systeme/php-cs-fixer-config/pull/71
[#74]: https://github.com/hks-systeme/php-cs-fixer-config/pull/74
[#75]: https://github.com/hks-systeme/php-cs-fixer-config/pull/75

[@dependabot]: https://github.com/apps/dependabot
[@localheinz]: https://github.com/localheinz
