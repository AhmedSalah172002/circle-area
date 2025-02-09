<?php

namespace AhmedSalah172002\CircleArea\Commands;

use Illuminate\Console\Command;

class CircleAreaCommand extends Command
{
    public $signature = 'circle-area';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
