<?php

namespace Spatie\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversions\Temperature;
use Spatie\UnitConversions\Weight;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
