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

namespace HKS\PhpCsFixer\Config\Test\Double\Config\RuleSet;

use HKS\PhpCsFixer\Config;

final class DummyRuleSet implements Config\RuleSet
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array<string, array<string,mixed>|bool>
     */
    private $rules;

    /**
     * @var int
     */
    private $phpVersion;

    /**
     * @param array<string, array<string,mixed>|bool> $rules
     */
    public function __construct(string $name, array $rules, int $phpVersion)
    {
        $this->name = $name;
        $this->rules = $rules;
        $this->phpVersion = $phpVersion;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function rules(): array
    {
        return $this->rules;
    }

    public function targetPhpVersion(): int
    {
        return $this->phpVersion;
    }
}
