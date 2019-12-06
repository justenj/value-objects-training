<?php

declare(strict_types=1);

namespace Justenj\ValueObjects\Tests\Car\Integration;

use Justenj\ValueObjects\Car\Body\Body;
use Justenj\ValueObjects\Car\Body\Color as BodyColor;
use Justenj\ValueObjects\Car\Interior\Interior;
use Justenj\ValueObjects\Car\Interior\Color as InteriorColor;
use Justenj\ValueObjects\Car\Car;
use Justenj\ValueObjects\Car\Engine\Engine;
use Justenj\ValueObjects\Car\Engine\Type;
use Justenj\ValueObjects\Car\Engine\Volume;
use Justenj\ValueObjects\Car\Generation;
use Justenj\ValueObjects\Car\Model;
use Justenj\ValueObjects\Car\Transmission;
use Justenj\ValueObjects\Car\Vendor;
use Justenj\ValueObjects\Car\Year;
use Justenj\ValueObjects\Tests\TestCase;

class CarTest extends TestCase
{
    /** @test */
    public function car_to_array()
    {
        $vendor = Vendor::create('BMW');
        $model = Model::create('GL-3');
        $generation = Generation::create('III Restyling');
        $year = Year::create(1970);
        $transmission = Transmission::create('auto');

        $engineType = Type::create('petrol');
        $engineVolume = Volume::create(2.3);
        $engine = Engine::create($engineType, $engineVolume);

        $color = BodyColor::create('#007F00');
        $body = Body::create($color);
        $color = InteriorColor::create('#CD661D');
        $interior = Interior::create($color);

        $car = Car::create($vendor, $model, $generation, $year, $transmission, $engine, $body, $interior);

        $array = $car->toArray();
        $this->assertSame('BMW', $array['vendor']);
        $this->assertSame('GL-3', $array['model']);
        $this->assertSame('III Restyling', $array['generation']);
        $this->assertSame(1970, $array['year']);
        $this->assertSame('auto', $array['transmission']);
        $this->assertSame('petrol', $array['engine']['type']);
        $this->assertSame(2.3, $array['engine']['volume']);
        $this->assertSame('#007F00', $array['body']['color']);
        $this->assertSame('#CD661D', $array['interior']['color']);
    }

    /** @test */
    public function car_to_string()
    {
        $vendor = Vendor::create('BMW');
        $model = Model::create('GL-3');
        $generation = Generation::create('III Restyling');
        $year = Year::create(1970);
        $transmission = Transmission::create('auto');

        $engineType = Type::create('petrol');
        $engineVolume = Volume::create(2.3);
        $engine = Engine::create($engineType, $engineVolume);

        $color = BodyColor::create('#007F00');
        $body = Body::create($color);
        $color = InteriorColor::create('#CD661D');
        $interior = Interior::create($color);

        $car = Car::create($vendor, $model, $generation, $year, $transmission, $engine, $body, $interior);
        $this->assertEquals('BMW GL-3 III Restyling 1970 auto petrol 2.3 #007F00 #CD661D', $car->toString());
    }
}
