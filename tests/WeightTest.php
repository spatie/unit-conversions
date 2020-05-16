<?php

namespace Spatie\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $carats = Weight::fromGramToCarat(15);

        $this->assertEquals(75, $carats);
    }
}
