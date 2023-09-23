<?php

namespace Dedecube\Composer\Commands;

use Illuminate\Console\Command;

class LaravelComposerCommand extends Command
{
    public $signature = 'laravel-composer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
