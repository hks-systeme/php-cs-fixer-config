<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021-2023 HKS Systeme GmbH
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/hks-systeme/php-cs-fixer-config
 */

namespace HKS\PhpCsFixer\Config\RuleSet;

/**
 * Marker interface for explicit rule sets.
 *
 * An explicit rule set:
 *
 * - does not configure any rules for rule sets (@see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v2.17.3/doc/ruleSets/index.rst)
 * - configures a rule that can be configured with an explicit configuration when the rule is enabled
 * - configures every rule that is not deprecated
 */
interface ExplicitRuleSet
{
}
