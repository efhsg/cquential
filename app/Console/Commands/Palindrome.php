<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Palindrome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cquential:palindrome {word}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Is a word a palindrome';

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
     *
     */
    public function handle()
    {
        $word = $this->argument('word');

        $result = "The word '$word' is";
        $result .= (\App\Domain\Palindrome::isPalindrome($word)) ? "" : " not";
        $result .= " a palindrome";

        $this->info($result);

    }

}
