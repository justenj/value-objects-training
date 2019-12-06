<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Justenj\ValueObjects\Interfaces\Stringable;
use Justenj\ValueObjects\Traits\IsString;

/**
 * Class AbstractSimpleValueObject
 * @package Justenj\ValueObjects\Car
 */
abstract class AbstractSimpleValueObject extends Value implements Stringable
{
    use IsString;

    protected $value;

    /**
     * @return string
     */
    public function toString(): string
    {
        return (string)$this->value;
    }

    /**
     * @param $value
     * @return mixed
     */
    abstract public static function create($value);
}
