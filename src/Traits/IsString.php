<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Traits;

use Justenj\ValueObjects\Interfaces\Stringable;

/**
 * Trait IsString
 * @package Justenj\ValueObjects\Traits
 */
trait IsString
{
    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->toString();
    }
}
