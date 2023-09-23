<?php

test('check composer service has isPackageInstalled method', function () {
    $composer = app(\Dedecube\Composer\Contracts\ComposerInterface::class);

    expect(method_exists($composer, 'isPackageInstalled'))->toBeTrue();
});

test('check composer service has getInstalledPackages method', function () {
    $composer = app(\Dedecube\Composer\Contracts\ComposerInterface::class);

    expect(method_exists($composer, 'getInstalledPackages'))->toBeTrue();
});

test('check has package installed return true when package is installed', function () {
    $composer = app(\Dedecube\Composer\Contracts\ComposerInterface::class);

    expect($composer->isPackageInstalled('spatie/laravel-package-tools'))->toBeTrue();
});

test('check has package installed return false when package is not installed', function () {
    $composer = app(\Dedecube\Composer\Contracts\ComposerInterface::class);

    expect($composer->isPackageInstalled('spatie/laravel-package-tools-fake'))->toBeFalse();
});
