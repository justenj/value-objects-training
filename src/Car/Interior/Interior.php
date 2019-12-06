<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Interior;

use Justenj\ValueObjects\Car\Color;
use Justenj\ValueObjects\Interfaces\Arrayable;
use Justenj\ValueObjects\Interfaces\Stringable;
use Justenj\ValueObjects\Traits\IsArray;
use Justenj\ValueObjects\Traits\IsString;

/**
 * Class Interior
 * @package Justenj\ValueObjects\Car\Interior
 */
class Interior implements Arrayable, Stringable
{
    use IsString;
    use IsArray;

    /** @var Color */
    private $color;

    /**
     * Interior constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param Color $color
     * @return static
     */
    public static function create(Color $color): self
    {
        $instance = new static();

        $instance->color = $color;

        return $instance;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->color->toString();
    }
}
