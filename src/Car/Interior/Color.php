<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Interior;

use Webmozart\Assert\Assert;

/**
 * Class Color
 * @package Justenj\ValueObjects\Car\Interior
 */
class Color extends \Justenj\ValueObjects\Car\Color
{
    /**
     * @param $value
     * @return static
     */
    public static function create($value)
    {
        $instance = parent::create($value);

        Assert::regex($value, '/^(#040001|#FAFBFB|#FF8649|#CD661D)$/');

        return $instance;
    }
}
