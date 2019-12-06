<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Webmozart\Assert\Assert;

/**
 * Class Vendor
 * @package Justenj\ValueObjects\Car
 */
class Vendor extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value): self
    {
        Assert::string($value);

        return static::createFromValue($value);
    }
}
