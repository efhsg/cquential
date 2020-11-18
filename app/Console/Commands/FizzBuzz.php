<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FizzBuzz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cquential:fizzbuzz {number?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The classic FizzBuzz problem';

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

        $number = $this->argument('number');
        if ($number) {
            $this->info(\App\Domain\FizzBuzz::fizzbuzz($number));
        } else {
            \App\Domain\FizzBuzz::print();
        }
    }
}
