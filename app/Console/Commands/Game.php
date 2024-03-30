<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Arr;

use App\Enums\GameOption;
use App\Enums\GameResult;
use App\DTO\OutcomeDTO;
use App\Actions\DecideOutcome;

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
        $playerChoice = $this->ask('choose: rock, paper, scissors, lizard, spock');

        $validator = Validator::make(
            ['choice' => $playerChoice],
            ['choice' => [new Enum(GameOption::class)]],
            ['choice.Illuminate\Validation\Rules\Enum' => 'choice can only be one of: ' . implode(', ', GameOption::values())]
        );

        if($validator->fails()) {
            foreach($validator->errors()->get('choice') as $message) {
                $this->error($message);
                return 1;
            }
        }

        $playerChoice = GameOption::tryFrom($playerChoice);

        $randomChoice = Arr::random(GameOption::values());

        $cpuChoice = GameOption::tryFrom($randomChoice);

        $determineAction = new DecideOutcome();

        $result = $determineAction->handle($playerChoice, $cpuChoice);

        $this->info($playerChoice->value . ' vs ' . $cpuChoice->value);

        $this->info($result->message . ': ' . $result->result->value);

    }
}
