<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car\Body;

use Webmozart\Assert\Assert;

/**
 * Class Color
 * @package Justenj\ValueObjects\Car\Body
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

        Assert::regex($value, '/^(#040001|#CACECB|#FAFBFB|#97948F|#0000CC|#EE1D19|#007F00|#200204|#C49648|#22A0F8|#DEA522|#660099|#4A2197|#FFD600|#FF8649|#FFC0CB)$/');

        return $instance;
    }
}
