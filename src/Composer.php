<?php

namespace Dedecube\Composer;

use Composer\Factory;
use Composer\IO\NullIO;
use Dedecube\Composer\Contracts\ComposerInterface;
use Illuminate\Support\Facades\Cache;

class Composer implements ComposerInterface
{
    protected $composer;

    public function __construct()
    {
        $this->composer = Factory::create(new NullIO());
    }

    public function getInstalledPackages(): array
    {
        $repo = $this->composer
            ->getRepositoryManager()
            ->getLocalRepository();

        return $repo->getPackages();
    }

    public function isPackageInstalled($packageName): bool
    {
        return Cache::rememberForever(
            $this->cacheKeyForPackage($packageName),
            function () use ($packageName) {
                $installedPackages = $this->getInstalledPackages();

                foreach ($installedPackages as $package) {
                    if ($package->getName() === $packageName) {
                        return true;
                    }
                }

                return false;
            }
        );
    }

    /**
     * Get the cache key for the given package name.
     */
    private function cacheKeyForPackage(string $packageName): string
    {
        return "composer.package.$packageName";
    }
}
