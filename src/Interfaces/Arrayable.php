<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Interfaces;

/**
 * Interface Arrayable
 * @package Justenj\ValueObjects\Interfaces
 */
interface Arrayable
{
    /**
     * @return array
     */
    public function toArray(): array;
}
