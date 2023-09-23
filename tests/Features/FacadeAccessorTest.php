<?php

use Dedecube\Composer\Facades\Composer;

it('can access the facade accessor', function () {
    $instance = Composer::getFacadeRoot();

    expect($instance)->toBeInstanceOf(Dedecube\Composer\Composer::class);
});
