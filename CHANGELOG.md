# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

For a full diff see [`2.9.0...main`][2.9.0...main].

## [`2.9.0`][2.9.0]

For a full diff see [`2.8.0...2.9.0`][2.8.0...2.9.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#218]), by [@dependabot]
- Enabled `class_reference_name_casing` fixer ([#219]), by [@localheinz]
- Enabled `no_unneeded_import_alias` fixer ([#220]), by [@localheinz]

## [`2.8.0`][2.8.0]

For a full diff see [`2.7.0...2.8.0`][2.7.0...2.8.0].

### Changed

- Enabled `get_class_to_class_keyword` fixer ([#204]), by [@localheinz]
- Updated `friendsofphp/php-cs-fixer` ([#202]), by [@dependabot]

## [`2.7.0`][2.7.0]

For a full diff see [`2.6.0...2.7.0`][2.6.0...2.7.0].

### Changed

- Dropped support for PHP 7.2 ([#191]), by [@localheinz]
- Dropped support for PHP 7.3 ([#194]), by [@localheinz]

### Removed

- Removed `Php71` rule set ([#190]), by [@localheinz]
- Removed `Php72` rule set ([#193]), by [@localheinz]
- Removed `Php73` rule set ([#196]), by [@localheinz]

## [`2.6.0`][2.6.0]

For a full diff see [`2.5.0...2.6.0`][2.5.0...2.6.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#175]), by [@dependabot]

## [`2.5.0`][2.5.0]

For a full diff see [`2.4.0...2.5.0`][2.4.0...2.5.0].

### Changed

- Added `Php81` rule set ([#164]), by [@localheinz]
- Enabled and configured `yoda_style` fixer ([#166]), by [@localheinz]

## [`2.4.0`][2.4.0]

For a full diff see [`2.3.1...2.4.0`][2.3.1...2.4.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#157]), by [@dependabot]

## [`2.3.1`][2.3.1]

For a full diff see [`2.3.0...2.3.1`][2.3.0...2.3.1].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#149]), by [@dependabot]

### Fixed

- Stopped using `parameters` option for `trailing_comma_in_multiline` fixer in `Php74` rule set ([#150]), by [@localheinz]

## [`2.3.0`][2.3.0]

For a full diff see [`2.2.0...2.3.0`][2.2.0...2.3.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#138]), by [@dependabot]
- Enabled `assign_null_coalescing_to_coalesce_equal` fixer in `Php74` and `Php80` rule sets ([#140]), by [@localheinz]
- Enabled and configured `control_structure_continuation_position` fixer ([#141]), by [@localheinz]
- Enabled and configured `empty_loop_condition` fixer ([#142]), by [@localheinz]
- Enabled `integer_literal_case` fixer ([#143]), by [@localheinz]
- Enabled `modernize_strpos` fixer for `Php80` rule set ([#144]), by [@localheinz]
- Enabled `no_space_around_double_colon` fixer ([#145]), by [@localheinz]
- Enabled `string_length_to_empty` fixer ([#146]), by [@localheinz]

### Fixed

- Stopped using deprecated `use_trait` option for `no_extra_blank_lines` fixer ([#139]), by [@localheinz]
- Explicitly configured `cast_spaces` fixer ([#147]), by [@localheinz]
- Explicitly configured `constant_case` fixer ([#148]), by [@localheinz]

## [`2.2.0`][2.2.0]

For a full diff see [`2.1.0...2.2.0`][2.1.0...2.2.0].

### Changed

- Configured `class_attributes_separation` fixer to use `only_if_meta` option for element `trait_import` ([#132]), by [@localheinz]

## [`2.1.0`][2.1.0]

For a full diff see [`2.0.0...2.1.0`][2.0.0...2.1.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#121]), by [@dependabot]
- Enabled `declare_parentheses` fixer ([#125]), by [@localheinz]
- Enabled and configured `empty_loop_body` fixer ([#126]), by [@localheinz]
- Enabled and configured `types_spaces` fixer ([#127]), by [@localheinz]
- Configured `class_attributes_separation` fixer to use newly added `only_if_meta` option for elements `const` and `property` ([#128]), by [@localheinz]
- Configured `class_attributes_separation` fixer to use `none` option for element `trait_import` ([#129]), by [@localheinz]
- Added `template` to `ignored_tags` configuration of `doctrine_*` fixers ([#130]), by [@localheinz]
- Configured `single_space_after_construct` fixer to enforce single space after additional constructs ([#131]), by [@localheinz]

## [`2.0.0`][2.0.0]

For a full diff see [`1.1.0...2.0.0`][1.1.0...2.0.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#71]), by [@localheinz]
- Configured `trailing_comma_in_multiline` fixer to add trailing commas for arguments in `Php73`, `Php74`, and `Php80` rule sets ([#74]), by [@localheinz]
- Configured `trailing_comma_in_multiline` fixer to add trailing commas for parameters in `Php80` rule set ([#75]), by [@localheinz]

## [`1.1.0`][1.1.0]

For a full diff see [`1.0.3...1.1.0`][1.0.3...1.1.0].

### Changed

- Updated `friendsofphp/php-cs-fixer` ([#67]), by [@dependabot]

## [`1.0.3`][1.0.3]

For a full diff see [`1.0.2...1.0.3`][1.0.2...1.0.3].

### Fixed

- Updated `friendsofphp/php-cs-fixer` ([#59]), by [@dependabot]

## [`1.0.2`][1.0.2]

For a full diff see [`1.0.1...1.0.2`][1.0.1...1.0.2].

### Fixed

- Updated `friendsofphp/php-cs-fixer` ([#51]), by [@dependabot]

## [`1.0.1`][1.0.1]

For a full diff see [`1.0.0...1.0.1`][1.0.0...1.0.1].

### Fixed

- Stopped using deprecated configuration for `class_attributes_separation` fixer ([#15]), by [@localheinz]
- Updated `friendsofphp/php-cs-fixer` ([#41]), by [@dependabot]

## [`1.0.0`][1.0.0]

For a full diff see [`3a0205c...1.0.0`][3a0205c...1.0.0].

### Added

- Added `Php80` ([#4]), by [@localheinz]
- Added `Php71`, `Php72`, `Php73`, and `Php74` ([#1]), by [@localheinz]

### Changed

- Configured `no_whitespace_before_comma_in_array` fixer to remove whitespace between heredoc and comma ([#5]), by [@localheinz]
- Configured `trailing_comma_in_multiline_array` fixer to add a trailing comma after heredoc in multi-line array ([#6]), by [@localheinz]

[1.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.0
[1.0.1]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.1
[1.0.2]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.2
[1.0.3]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.0.3
[1.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/1.1.0
[2.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.0.0
[2.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.1.0
[2.2.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.2.0
[2.3.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.3.0
[2.3.1]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.3.1
[2.4.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.4.0
[2.5.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.5.0
[2.6.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.6.0
[2.7.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.7.0
[2.8.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.8.0
[2.9.0]: https://github.com/hks-systeme/php-cs-fixer-config/releases/tag/2.9.0

[3a0205c...1.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/3a0205c...1.0.0
[1.0.0...1.0.1]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.0...1.0.1
[1.0.1...1.0.2]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.1...1.0.2
[1.0.2...1.0.3]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.2...1.0.3
[1.0.3...1.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.0.3...1.1.0
[1.1.0...2.0.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/1.1.0...2.0.0
[2.0.0...2.1.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.0.0...2.1.0
[2.1.0...2.2.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.1.0...2.2.0
[2.2.0...2.3.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.2.0...2.3.0
[2.3.0...2.3.1]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.3.0...2.3.1
[2.3.1...2.4.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.3.1...2.4.0
[2.4.0...2.5.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.4.0...2.5.0
[2.5.0...2.6.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.5.0...2.6.0
[2.6.0...2.7.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.6.0...2.7.0
[2.7.0...2.8.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.7.0...2.8.0
[2.8.0...2.9.0]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.8.0...2.9.0
[2.9.0...main]: https://github.com/hks-systeme/php-cs-fixer-config/compare/2.9.0...main

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
[#121]: https://github.com/hks-systeme/php-cs-fixer-config/pull/121
[#125]: https://github.com/hks-systeme/php-cs-fixer-config/pull/125
[#126]: https://github.com/hks-systeme/php-cs-fixer-config/pull/126
[#127]: https://github.com/hks-systeme/php-cs-fixer-config/pull/127
[#128]: https://github.com/hks-systeme/php-cs-fixer-config/pull/128
[#129]: https://github.com/hks-systeme/php-cs-fixer-config/pull/129
[#130]: https://github.com/hks-systeme/php-cs-fixer-config/pull/130
[#131]: https://github.com/hks-systeme/php-cs-fixer-config/pull/131
[#132]: https://github.com/hks-systeme/php-cs-fixer-config/pull/132
[#138]: https://github.com/hks-systeme/php-cs-fixer-config/pull/138
[#139]: https://github.com/hks-systeme/php-cs-fixer-config/pull/139
[#140]: https://github.com/hks-systeme/php-cs-fixer-config/pull/140
[#141]: https://github.com/hks-systeme/php-cs-fixer-config/pull/141
[#142]: https://github.com/hks-systeme/php-cs-fixer-config/pull/142
[#143]: https://github.com/hks-systeme/php-cs-fixer-config/pull/143
[#144]: https://github.com/hks-systeme/php-cs-fixer-config/pull/144
[#145]: https://github.com/hks-systeme/php-cs-fixer-config/pull/145
[#146]: https://github.com/hks-systeme/php-cs-fixer-config/pull/146
[#147]: https://github.com/hks-systeme/php-cs-fixer-config/pull/147
[#148]: https://github.com/hks-systeme/php-cs-fixer-config/pull/148
[#149]: https://github.com/hks-systeme/php-cs-fixer-config/pull/149
[#150]: https://github.com/hks-systeme/php-cs-fixer-config/pull/150
[#157]: https://github.com/hks-systeme/php-cs-fixer-config/pull/157
[#164]: https://github.com/hks-systeme/php-cs-fixer-config/pull/164
[#166]: https://github.com/hks-systeme/php-cs-fixer-config/pull/166
[#175]: https://github.com/hks-systeme/php-cs-fixer-config/pull/175
[#190]: https://github.com/hks-systeme/php-cs-fixer-config/pull/190
[#191]: https://github.com/hks-systeme/php-cs-fixer-config/pull/191
[#193]: https://github.com/hks-systeme/php-cs-fixer-config/pull/193
[#196]: https://github.com/hks-systeme/php-cs-fixer-config/pull/196
[#202]: https://github.com/hks-systeme/php-cs-fixer-config/pull/202
[#204]: https://github.com/hks-systeme/php-cs-fixer-config/pull/204
[#218]: https://github.com/hks-systeme/php-cs-fixer-config/pull/218
[#219]: https://github.com/hks-systeme/php-cs-fixer-config/pull/219
[#220]: https://github.com/hks-systeme/php-cs-fixer-config/pull/220

[@dependabot]: https://github.com/apps/dependabot
[@localheinz]: https://github.com/localheinz
