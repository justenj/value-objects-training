<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Webmozart\Assert\Assert;

/**
 * Class Year
 * @package Justenj\ValueObjects\Car
 */
class Year extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value)
    {
        Assert::integer($value);
        Assert::length($value, 4);
        Assert::greaterThanEq($value, 1900);

        return static::createFromValue($value);
    }
}
