<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Justenj\ValueObjects\Interfaces\Valuable;

/**
 * Class Value
 * @package Justenj\ValueObjects\Car
 */
abstract class Value implements Valuable
{
    protected $value;

    /**
     * Value constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param $value
     * @return mixed
     */
    protected static function createFromValue($value)
    {
        $instance = new static();

        $instance->value = $value;

        return $instance;
    }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }
}
