<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Engine;

use Justenj\ValueObjects\Car\AbstractSimpleValueObject;
use Webmozart\Assert\Assert;

/**
 * Class Volume
 * @package Justenj\ValueObjects\Car\Engine
 */
class Volume extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value)
    {
        Assert::float($value);
        Assert::greaterThanEq($value, 0.2);
        Assert::lessThanEq($value, 10);

        return static::createFromValue($value);
    }
}
