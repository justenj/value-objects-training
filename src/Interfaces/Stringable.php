<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Interfaces;

/**
 * Interface Stringable
 * @package Justenj\ValueObjects\Interfaces
 */
interface Stringable
{
    /**
     * @return string
     */
    public function toString(): string;
}
