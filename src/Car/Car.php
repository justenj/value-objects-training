<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Car;

use Justenj\ValueObjects\Car\Body\Body;
use Justenj\ValueObjects\Car\Engine\Engine;
use Justenj\ValueObjects\Car\Interior\Interior;
use Justenj\ValueObjects\Interfaces\Arrayable;
use Justenj\ValueObjects\Interfaces\Stringable;
use Justenj\ValueObjects\Traits\IsArray;
use Justenj\ValueObjects\Traits\IsString;

/**
 * Class Car
 * @package Justenj\ValueObjects\Car
 */
class Car implements Arrayable, Stringable
{
    use IsString;
    use IsArray;

    /** @var Vendor */
    private $vendor;
    /** @var Model */
    private $model;
    /** @var Generation */
    private $generation;
    /** @var Year */
    private $year;
    /** @var Transmission */
    private $transmission;
    /** @var Engine */
    private $engine;
    /** @var Body */
    private $body;
    /** @var Interior */
    private $interior;

    /**
     * @param Vendor $vendor
     * @param Model $model
     * @param Generation $generation
     * @param Year $year
     * @param Transmission $transmission
     * @param Engine $engine
     * @param Body $body
     * @param Interior $interior
     * @return Car
     */
    public static function create(
        Vendor $vendor,
        Model $model,
        Generation $generation,
        Year $year,
        Transmission $transmission,
        Engine $engine,
        Body $body,
        Interior $interior
    ): self {
        $instance = new static();

        $instance->vendor = $vendor;
        $instance->model = $model;
        $instance->generation = $generation;
        $instance->year = $year;
        $instance->transmission = $transmission;
        $instance->engine = $engine;
        $instance->body = $body;
        $instance->interior = $interior;

        return $instance;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return sprintf(
            "%s %s %s %s %s %s %s %s",
            $this->vendor->toString(),
            $this->model->toString(),
            $this->generation->toString(),
            $this->year->toString(),
            $this->transmission->toString(),
            $this->engine->toString(),
            $this->body->toString(),
            $this->interior->toString()
        );
    }
}
