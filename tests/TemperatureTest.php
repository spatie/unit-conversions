<?php

use Spatie\UnitConversions\Temperature;

it('can convert celsius to fahrenheit', function () {
    $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

    expect($fahrenheit)->toEqual(212);
});

it('can convert celsius to kelvin', function () {
    $kelvin = Temperature::fromCelsius(100)->toKelvin();

    expect($kelvin)->toEqual(373.15);
});
