<?php

namespace LaracmsPackage\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'laracms-package';

    public $description = 'LaracmsPackage command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
