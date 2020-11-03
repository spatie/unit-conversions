<?php

namespace Spatie\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);

        $this->assertTrue(false);
    }

    /** @test */
    public function it_can_convert_celsius_to_kelvin()
    {
        $kelvin = Temperature::fromCelsius(100)->toKelvin();

        $this->assertEquals(373.15, $kelvin);
    }
}
