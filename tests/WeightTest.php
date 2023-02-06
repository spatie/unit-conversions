<?php

namespace Spatie\UnitConversions\Tests;

use Spatie\UnitConversions\Weight;

it('can convert kilograms to lbs', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();

    expect(bccomp($lbs, 220.4623, 4))->toBe(0);
});
