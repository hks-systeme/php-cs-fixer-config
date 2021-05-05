# php-cs-fixer-config

[![Integrate](https://github.com/hks-systeme/php-cs-fixer-config/workflows/Integrate/badge.svg)](https://github.com/hks-systeme/php-cs-fixer-config/actions)
[![Prune](https://github.com/hks-systeme/php-cs-fixer-config/workflows/Prune/badge.svg)](https://github.com/hks-systeme/php-cs-fixer-config/actions)
[![Release](https://github.com/hks-systeme/php-cs-fixer-config/workflows/Release/badge.svg)](https://github.com/hks-systeme/php-cs-fixer-config/actions)
[![Renew](https://github.com/hks-systeme/php-cs-fixer-config/workflows/Renew/badge.svg)](https://github.com/hks-systeme/php-cs-fixer-config/actions)

[![Code Coverage](https://codecov.io/gh/hks-systeme/php-cs-fixer-config/branch/main/graph/badge.svg)](https://codecov.io/gh/hks-systeme/php-cs-fixer-config)
[![Type Coverage](https://shepherd.dev/github/hks-systeme/php-cs-fixer-config/coverage.svg)](https://shepherd.dev/github/hks-systeme/php-cs-fixer-config)

[![Latest Stable Version](https://poser.pugx.org/hks-systeme/php-cs-fixer-config/v/stable)](https://packagist.org/packages/hks-systeme/php-cs-fixer-config)
[![Total Downloads](https://poser.pugx.org/hks-systeme/php-cs-fixer-config/downloads)](https://packagist.org/packages/hks-systeme/php-cs-fixer-config)

Provides a configuration factory and multiple rule sets for [`friendsofphp/php-cs-fixer`](http://github.com/FriendsOfPHP/PHP-CS-Fixer).

## Installation

Run

```sh
$ composer require --dev hks-systeme/php-cs-fixer-config
```

## Usage

### Configuration

Pick one of the rule sets:

* [`HKS\PhpCsFixer\RuleSet\Php71`](src/RuleSet/Php71.php)
* [`HKS\PhpCsFixer\RuleSet\Php72`](src/RuleSet/Php72.php)
* [`HKS\PhpCsFixer\RuleSet\Php73`](src/RuleSet/Php73.php)
* [`HKS\PhpCsFixer\RuleSet\Php74`](src/RuleSet/Php74.php)
* [`HKS\PhpCsFixer\RuleSet\Php80`](src/RuleSet/Php80.php)

Create a configuration file `.php-cs-fixer.php` in the root of your project:

```php
<?php

use HKS\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74());

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php_cs.cache');

return $config;
```

### Git

All configuration examples use the caching feature, and if you want to use it as well, you should add the cache directory to `.gitignore`:

```diff
+ /.build/
 /vendor/
```

:bulb: Personally, I prefer to use a `.build` directory for storing build artifacts.

### Configuration with header

:bulb: Optionally specify a header:

```diff
 <?php

 use HKS\PhpCsFixer\Config;

+$header = <<<EOF
+Copyright (c) 2021 HKS Systeme GmbH
+
+For the full copyright and license information, please view
+the LICENSE file that was distributed with this source code.
+
+@see https://github.com/hks-systeme/php-cs-fixer-config
+EOF;

-$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74());
+$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74($header));

 $config->getFinder()->in(__DIR__);
 $config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php_cs.cache');

 return $config;
```

This will enable and configure the [`HeaderCommentFixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v2.1.1/src/Fixer/Comment/HeaderCommentFixer.php), so that
file headers will be added to PHP files, for example:

```php
<?php

/**
 * Copyright (c) 2021 HKS Systeme GmbH
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/hks-systeme/php-cs-fixer-config
 */
```

### Configuration with override rules

:bulb: Optionally override rules from a rule set by passing in an array of rules to be merged in:

```diff
 <?php

 use HKS\PhpCsFixer\Config;

-$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74());
+$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php74(), [
+    'mb_str_functions' => false,
+    'strict_comparison' => false,
+]);

 $config->getFinder()->in(__DIR__);
 $config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php_cs.cache');

 return $config;
```

### Makefile

If you like [`Makefile`](https://www.gnu.org/software/make/manual/make.html#Introduction)s, create a `Makefile` with a `coding-standards` target:

```diff
+.PHONY: coding-standards
+coding-standards: vendor
+	 mkdir -p .build/php-cs-fixer
+	 vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php --diff --verbose

 vendor: composer.json composer.lock
     composer validate
     composer install
```

Run

```
$ make coding-standards
```

to automatically fix coding standard violations.

### Composer script

If you like [`composer` scripts](https://getcomposer.org/doc/articles/scripts.md), add a `coding-standards` script to `composer.json`:

```diff
 {
   "name": "foo/bar",
   "require": {
     "php": "^7.4",
   },
   "require-dev": {
     "hks-systeme/php-cs-fixer-config": "~1.0.0"
+  },
+  "scripts": {
+    "coding-standards": [
+      "mkdir -p .build/php-cs-fixer",
+      "php-cs-fixer fix --diff --diff-format=udiff --verbose"
+    ]
   }
 }
```

Run

```
$ composer coding-standards
```

to automatically fix coding standard violations.

### GitHub Actions

If you like [GitHub Actions](https://github.com/features/actions), add a `coding-standards` job to your workflow:

```diff
 on:
   pull_request: null
   push:
     branches:
       - main

 name: "Integrate"

 jobs:
+  coding-standards:
+    name: "Coding Standards"
+
+    runs-on: ubuntu-latest
+
+    strategy:
+      matrix:
+        php-version:
+          - "7.4"
+
+    steps:
+      - name: "Checkout"
+        uses: "actions/checkout@v2"
+
+      - name: "Install PHP with extensions"
+        uses: "shivammathur/setup-php@v2"
+        with:
+          coverage: "none"
+          php-version: "${{ matrix.php-version }}"
+
+      - name: "Cache dependencies installed with composer"
+        uses: "actions/cache@v2"
+        with:
+          path: "~/.composer/cache"
+          key: "php-${{ matrix.php-version }}-composer-${{ hashFiles('composer.lock') }}"
+          restore-keys: "php-${{ matrix.php-version }}-composer-"
+
+      - name: "Install locked dependencies with composer"
+        run: "composer install --no-interaction --no-progress --no-suggest"
+
+      - name: "Create cache directory for friendsofphp/php-cs-fixer"
+        run: mkdir -p .build/php-cs-fixer
+
+      - name: "Cache cache directory for friendsofphp/php-cs-fixer"
+        uses: "actions/cache@v2"
+        with:
+          path: "~/.build/php-cs-fixer"
+          key: "php-${{ matrix.php-version }}-php-cs-fixer-${{ github.sha }}"
+          restore-keys: "php-${{ matrix.php-version }}-php-cs-fixer-"
+
+      - name: "Run friendsofphp/php-cs-fixer"
+       run: "vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php --diff --diff-format=udiff --dry-run --verbose"
```

## Changelog

Please have a look at [`CHANGELOG.md`](CHANGELOG.md).

## Contributing

Please have a look at [`CONTRIBUTING.md`](.github/CONTRIBUTING.md).

## Code of Conduct

Please have a look at [`CODE_OF_CONDUCT.md`](https://github.com/hks-systeme/.github/blob/main/CODE_OF_CONDUCT.md).

## License

This package is licensed using the MIT License.

Please have a look at [`LICENSE.md`](LICENSE.md).

## Credits

This project is inspired by [`ergebnis/php-cs-fixer-config`](https://github.com/ergebnis/php-cs-fixer-config).
