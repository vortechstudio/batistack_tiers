<?php

namespace Batistack\Tiers\Commands;

use Illuminate\Console\Command;

class TiersCommand extends Command
{
    public $signature = 'tiers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
