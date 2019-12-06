<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Body;

use Justenj\ValueObjects\Car\Color;
use Justenj\ValueObjects\Interfaces\Arrayable;
use Justenj\ValueObjects\Interfaces\Stringable;
use Justenj\ValueObjects\Traits\IsArray;
use Justenj\ValueObjects\Traits\IsString;

/**
 * Class Body
 * @package Justenj\ValueObjects\Car\Body
 */
class Body implements Arrayable, Stringable
{
    use IsString;
    use IsArray;

    /** @var Color */
    private $color;

    /**
     * Body constructor.
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
