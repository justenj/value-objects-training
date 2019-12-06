<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Webmozart\Assert\Assert;

/**
 * Class Transmission
 * @package Justenj\ValueObjects\Car
 */
class Transmission extends AbstractSimpleValueObject
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value): self
    {
        Assert::string($value);
        Assert::regex($value, '/^(auto|robot|variator|mechanic)$/');

        return static::createFromValue($value);
    }
}
