<?php

namespace Dedecube\Composer\Contracts;

interface ComposerInterface
{
    /**
     * Get the installed packages.
     *
     * @return \Composer\Package\BasePackage[]
     */
    public function getInstalledPackages(): array;

    /**
     * Determine if the given package is installed.
     *
     * @param  string  $packageName The package name.
     * @return bool True if the package is installed, false otherwise.
     */
    public function isPackageInstalled($packageName): bool;
}
