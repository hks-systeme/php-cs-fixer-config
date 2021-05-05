<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 HKS Systeme GmbH
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/hks-systeme/php-cs-fixer-config
 */

use Ergebnis\License;
use HKS\PhpCsFixer;

$license = License\Type\MIT::markdown(
    __DIR__ . '/LICENSE.md',
    License\Range::since(
        License\Year::fromString('2021'),
        new \DateTimeZone('UTC')
    ),
    License\Holder::fromString('HKS Systeme GmbH'),
    License\Url::fromString('https://github.com/hks-systeme/php-cs-fixer-config')
);

$license->save();

$config = PhpCsFixer\Config\Factory::fromRuleSet(new PhpCsFixer\Config\RuleSet\Php72($license->header()));

$config->getFinder()
    ->exclude([
        '.build/',
        '.github/',
        '.notes/',
    ])
    ->ignoreDotFiles(false)
    ->in(__DIR__)
    ->name('.php-cs-fixer.php');

$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/.php-cs-fixer.cache');

return $config;
