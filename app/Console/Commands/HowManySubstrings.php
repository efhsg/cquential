<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HowManySubstrings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cquential:howmanysubstrings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Determine how many substrings based on a input file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \App\Domain\HowManySubstrings::run();
    }
}
