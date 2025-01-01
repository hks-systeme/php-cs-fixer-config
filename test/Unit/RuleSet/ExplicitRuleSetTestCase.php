<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021-2025 HKS Systeme GmbH
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/hks-systeme/php-cs-fixer-config
 */

namespace HKS\PhpCsFixer\Config\Test\Unit\RuleSet;

use HKS\PhpCsFixer\Config;
use PhpCsFixer\Fixer;
use PhpCsFixer\FixerConfiguration;

/**
 * @internal
 */
abstract class ExplicitRuleSetTestCase extends AbstractRuleSetTestCase
{
    final public function testIsExplicitRuleSet(): void
    {
        $ruleSet = self::createRuleSet();

        self::assertInstanceOf(Config\RuleSet\ExplicitRuleSet::class, $ruleSet);
    }

    final public function testRuleSetDoesNotConfigureRuleSets(): void
    {
        $rules = self::createRuleSet()->rules();

        $rulesWithoutRulesForRuleSets = \array_filter(
            $rules,
            static function (string $nameOfRule): bool {
                return '@' !== \mb_substr($nameOfRule, 0, 1);
            },
            \ARRAY_FILTER_USE_KEY,
        );

        self::assertEquals($rulesWithoutRulesForRuleSets, $rules, \sprintf(
            'Failed asserting that rule set "%s" does not configure rules for rule sets.',
            static::className(),
        ));
    }

    final public function testRuleSetConfiguresAllRulesThatAreNotDeprecated(): void
    {
        $rules = self::createRuleSet()->rules();

        $fixersThatAreBuiltInAndNotDeprecated = \array_filter(self::fixersThatAreBuiltIn(), static function (Fixer\FixerInterface $fixer): bool {
            return !$fixer instanceof Fixer\DeprecatedFixerInterface;
        });

        $rulesThatAreNotDeprecated = \array_combine(
            \array_keys($fixersThatAreBuiltInAndNotDeprecated),
            \array_fill(
                0,
                \count($fixersThatAreBuiltInAndNotDeprecated),
                false,
            ),
        );

        if (!\is_array($rulesThatAreNotDeprecated)) {
            throw new \RuntimeException('This should not happen.');
        }

        $rulesWithRulesThatAreNotDeprecated = \array_merge(
            $rulesThatAreNotDeprecated,
            $rules,
        );

        self::assertEquals($rulesWithRulesThatAreNotDeprecated, $rules, \sprintf(
            'Failed asserting that rule set "%s" configures all non-deprecated fixers.',
            static::className(),
        ));
    }

    final public function testRuleSetConfiguresAllRulesThatAreConfigurableAndNotDeprecatedWithAnExplicitConfigurationWithEveryOptionWhenTheyAreEnabled(): void
    {
        $rules = self::createRuleSet()->rules();

        $namesOfRules = \array_keys($rules);

        $fixersThatAreBuiltIn = self::fixersThatAreBuiltIn();

        $rulesWithAllNonDeprecatedConfigurationOptions = \array_combine(
            $namesOfRules,
            \array_map(static function (string $nameOfRule, $ruleConfiguration) use ($fixersThatAreBuiltIn) {
                if (!\is_array($ruleConfiguration)) {
                    return $ruleConfiguration;
                }

                $fixer = $fixersThatAreBuiltIn[$nameOfRule];

                if ($fixer instanceof Fixer\DeprecatedFixerInterface) {
                    return $ruleConfiguration;
                }

                if (!$fixer instanceof Fixer\ConfigurableFixerInterface) {
                    return $ruleConfiguration;
                }

                $configurationOptions = $fixer->getConfigurationDefinition()->getOptions();

                $nonDeprecatedConfigurationOptions = \array_filter($configurationOptions, static function (FixerConfiguration\FixerOptionInterface $fixerOption): bool {
                    return !$fixerOption instanceof FixerConfiguration\DeprecatedFixerOptionInterface;
                });

                $ruleConfigurationWithNonDeprecatedConfigurationOptions = \array_combine(
                    \array_map(static function (FixerConfiguration\FixerOptionInterface $fixerOption): string {
                        return $fixerOption->getName();
                    }, $nonDeprecatedConfigurationOptions),
                    \array_map(static function (FixerConfiguration\FixerOptionInterface $fixerOption) {
                        return $fixerOption->getDefault();
                    }, $nonDeprecatedConfigurationOptions),
                );

                if (!\is_array($ruleConfigurationWithNonDeprecatedConfigurationOptions)) {
                    throw new \RuntimeException('This should not happen.');
                }

                $diff = \array_diff_key(
                    $ruleConfigurationWithNonDeprecatedConfigurationOptions,
                    $ruleConfiguration,
                );

                if ([] === $diff) {
                    return $ruleConfiguration;
                }

                return \array_merge(
                    $ruleConfiguration,
                    $diff,
                );
            }, $namesOfRules, $rules),
        );

        self::assertEquals($rulesWithAllNonDeprecatedConfigurationOptions, $rules, \sprintf(
            'Failed asserting that rule set "%s" configures configurable rules using all non-deprecated configuration options.',
            static::className(),
        ));
    }
}
