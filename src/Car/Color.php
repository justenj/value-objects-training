<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Webmozart\Assert\Assert;

/**
 * Class Color
 * @package Justenj\ValueObjects\Car
 */
class Color extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value)
    {
        Assert::string($value);
        Assert::regex($value, '/^#[A-F0-9]+$/');
        Assert::length($value, 7);

        return static::createFromValue($value);
    }
}
