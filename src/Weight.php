<?php

namespace Spatie\UnitConversions;

/**
 * @method static float fromKilogramToGram(float $value)
 * @method static float fromKilogramToMilligram(float $value)
 * @method static float fromKilogramToLb(float $value)
 * @method static float fromKilogramToTone(float $value)
 * @method static float fromKilogramToCarat(float $value)
 * @method static float fromGramToKilogram(float $value)
 * @method static float fromGramToMilligram(float $value)
 * @method static float fromGramToLb(float $value)
 * @method static float fromGramToTonne(float $value)
 * @method static float fromGramToCarat(float $value)
 * @method static float fromMilligramToKilogram(float $value)
 * @method static float fromMilligramToGram(float $value)
 * @method static float fromMilligramToLb(float $value)
 * @method static float fromMilligramToTonne(float $value)
 * @method static float fromMilligramToCarat(float $value)
 * @method static float fromLbToKilogram(float $value)
 * @method static float fromLbToGram(float $value)
 * @method static float fromLbToMilligram(float $value)
 * @method static float fromLbToTonne(float $value)
 * @method static float fromLbToCarat(float $value)
 * @method static float fromTonneToKilogram(float $value)
 * @method static float fromTonneToGram(float $value)
 * @method static float fromTonneToMilligram(float $value)
 * @method static float fromTonneToLb(float $value)
 * @method static float fromTonneToCarat(float $value)
 * @method static float fromCaratToKilogram(float $value)
 * @method static float fromCaratToGram(float $value)
 * @method static float fromCaratToMilligram(float $value)
 * @method static float fromCaratToLb(float $value)
 * @method static float fromCaratToTonne(float $value)
 */
class Weight
{
    private static $units = [
        'kilogram' => 1,
        'gram' => 1000,
        'milligram' => 1000000,
        'lb' => 2.204622621849,
        'tonne' => 0.001,
        'carat' => 5000,
    ];

    public static function __callStatic($name, $arguments): float
    {
        list($from, $to) = self::extractUnits($name);
        $value = $arguments[0];

        $toKilograms = ($value * 1) / static::$units[$from];
        return $toKilograms * static::$units[$to];
    }

    private static function extractUnits($name): array
    {
        preg_match('/from([A-Z][a-z]+)To([A-Z][a-z]+)/', $name, $matches);
        return [strtolower($matches[1]), strtolower($matches[2])];
    }
}