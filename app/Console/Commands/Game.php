<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Game extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play a game of Rock, Paper, Scissors, Lizard, Spock';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
