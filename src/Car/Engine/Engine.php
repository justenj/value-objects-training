<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Engine;

use Justenj\ValueObjects\Interfaces\Arrayable;
use Justenj\ValueObjects\Interfaces\Stringable;
use Justenj\ValueObjects\Traits\IsArray;
use Justenj\ValueObjects\Traits\IsString;

/**
 * Class Engine
 * @package Justenj\ValueObjects\Car\Engine
 */
class Engine implements Arrayable, Stringable
{
    use IsString;
    use IsArray;

    /** @var Type */
    private $type;
    /** @var Volume */
    private $volume;

    /**
     * Engine constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param Type $type
     * @param Volume $volume
     * @return static
     */
    public static function create(Type $type, Volume $volume): self
    {
        $instance = new static();

        $instance->type = $type;
        $instance->volume = $volume;

        return $instance;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return sprintf(
            "%s %s",
            $this->type->toString(),
            $this->volume->toString()
        );
    }
}
