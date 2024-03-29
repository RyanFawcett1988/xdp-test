<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

use App\DTO\OutcomeDTO;
use App\Enums\GameOption;
use App\Enums\GameResult;

class DecideOutcome
{
    use AsAction;
    // protected $matchups = [];
    protected $matchups = [
        'rock' => [
            'rock' => [
                'result' => GameResult::DRAW,
                'message' => 'Same choice'
            ],
            'paper' => [
                'result' => GameResult::LOSE,
                'message' => 'Paper covers rock'
            ],
            'scissors' => [
                'result' => GameResult::WIN,
                'message' => 'Rock crushes scissors'
            ],
            'lizard' => [
                'result' => GameResult::WIN,
                'message' => 'Rock crushes lizard'
            ],
            'spock' => [
                'result' => GameResult::LOSE,
                'message' => 'Spock vaporises rock'
            ]
        ],
        'paper' => [
            'rock' => [
                'result' => GameResult::WIN,
                'message' => 'Paper covers rock'
            ],
            'paper' => [
                'result' => GameResult::DRAW,
                'message' => 'Same choice'
            ],
            'scissors' => [
                'result' => GameResult::LOSE,
                'message' => 'Scissors cut paper'
            ],
            'lizard' => [
                'result' => GameResult::LOSE,
                'message' => 'Lizard eats paper'
            ],
            'spock' => [
                'result' => GameResult::WIN,
                'message' => 'Paper disproves Spock'
            ]
        ],
        'scissors' => [
            'rock' => [
                'result' => GameResult::LOSE,
                'message' => 'Rock crushes scissors'
            ],
            'paper' => [
                'result' => GameResult::WIN,
                'message' => 'Scissors cut paper'
            ],
            'scissors' => [
                'result' => GameResult::DRAW,
                'message' => 'Same choice'
            ],
            'lizard' => [
                'result' => GameResult::WIN,
                'message' => 'Scissors decapitats lizard'
            ],
            'spock' => [
                'result' => GameResult::LOSE,
                'message' => 'Spock smashes scissors'
            ]
        ],
        'lizard' => [
            'rock' => [
                'result' => GameResult::LOSE,
                'message' => 'Rock crushes lizard'
            ],
            'paper' => [
                'result' => GameResult::WIN,
                'message' => 'Lizard eats paper'
            ],
            'scissors' => [
                'result' => GameResult::LOSE,
                'message' => 'Scissor decapitates lizard'
            ],
            'lizard' => [
                'result' => GameResult::DRAW,
                'message' => 'Same choice'
            ],
            'spock' => [
                'result' => GameResult::WIN,
                'message' => 'Lizard poisons Spock'
            ]
        ],
        'spock' => [
            'rock' => [
                'result' => GameResult::WIN,
                'message' => 'Spock vaporizes rock'
            ],
            'paper' => [
                'result' => GameResult::LOSE,
                'message' => 'Paper disproves Spock'
            ],
            'scissors' => [
                'result' => GameResult::WIN,
                'message' => 'Spock smashes scissors'
            ],
            'lizard' => [
                'result' => GameResult::LOSE,
                'message' => 'Lizard poisons Spock'
            ],
            'spock' => [
                'result' => GameResult::DRAW,
                'message' => 'Same choice'
            ]
        ],
    ];

    public function handle(GameOption $playerChoice, GameOption $cpuChoice): OutcomeDTO
    {
        $matchup = $this->matchups[$playerChoice->value][$cpuChoice->value];
        return new OutComeDTO($matchup['result'], $matchup['message']);
    }
}
