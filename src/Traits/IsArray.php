<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Traits;

use Justenj\ValueObjects\Interfaces\Arrayable;
use Justenj\ValueObjects\Interfaces\Valuable;

/**
 * Trait IsArray
 * @package Justenj\ValueObjects\Traits
 */
trait IsArray
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = get_object_vars($this);
        foreach ($array as $key => $value) {
            if ($value instanceof Arrayable) {
                $array[$key] = $value->toArray();
            } elseif ($value instanceof Valuable) {
                $array[$key] = $value->value();
            }
        }
        return $array;
    }
}
