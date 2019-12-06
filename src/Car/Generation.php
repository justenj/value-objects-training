<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Webmozart\Assert\Assert;

/**
 * Class Generation
 * @package Justenj\ValueObjects\Car
 */
class Generation extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value)
    {
        Assert::regex($value, '/[A-Za-z0-9\-]+/');

        return static::createFromValue($value);
    }
}
