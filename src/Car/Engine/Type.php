<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Engine;

use Justenj\ValueObjects\Car\AbstractSimpleValueObject;
use Webmozart\Assert\Assert;

/**
 * Class Type
 * @package Justenj\ValueObjects\Car\Engine
 */
class Type extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value): self
    {
        Assert::string($value);
        Assert::regex($value, '/(petrol|diesel|hybrid|electric)$/');

        return static::createFromValue($value);
    }
}
