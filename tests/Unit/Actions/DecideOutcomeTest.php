<?php

namespace Tests\Unit\Actions;

use PHPUnit\Framework\TestCase;

use App\Actions\DecideOutcome;
use App\Enums\GameOption;
use App\Enums\GameResult;

class DecideOutcomeTest extends TestCase
{
    public function test_outcomes(): void
    {

        $outcomes = [
            [
                'player' => GameOption::ROCK,
                'cpu' => GameOption::ROCK,
                'outcome' => GameResult::DRAW
            ],
            [
                'player' => GameOption::ROCK,
                'cpu' => GameOption::PAPER,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::ROCK,
                'cpu' => GameOption::SCISSORS,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::ROCK,
                'cpu' => GameOption::LIZARD,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::ROCK,
                'cpu' => GameOption::SPOCK,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::PAPER,
                'cpu' => GameOption::ROCK,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::PAPER,
                'cpu' => GameOption::PAPER,
                'outcome' => GameResult::DRAW
            ],
            [
                'player' => GameOption::PAPER,
                'cpu' => GameOption::SCISSORS,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::PAPER,
                'cpu' => GameOption::LIZARD,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::PAPER,
                'cpu' => GameOption::SPOCK,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SCISSORS,
                'cpu' => GameOption::ROCK,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::SCISSORS,
                'cpu' => GameOption::PAPER,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SCISSORS,
                'cpu' => GameOption::SCISSORS,
                'outcome' => GameResult::DRAW
            ],
            [
                'player' => GameOption::SCISSORS,
                'cpu' => GameOption::LIZARD,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SCISSORS,
                'cpu' => GameOption::SPOCK,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::LIZARD,
                'cpu' => GameOption::ROCK,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::LIZARD,
                'cpu' => GameOption::PAPER,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::LIZARD,
                'cpu' => GameOption::SCISSORS,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::LIZARD,
                'cpu' => GameOption::LIZARD,
                'outcome' => GameResult::DRAW
            ],
            [
                'player' => GameOption::LIZARD,
                'cpu' => GameOption::SPOCK,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SPOCK,
                'cpu' => GameOption::ROCK,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SPOCK,
                'cpu' => GameOption::PAPER,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::SPOCK,
                'cpu' => GameOption::SCISSORS,
                'outcome' => GameResult::WIN
            ],
            [
                'player' => GameOption::SPOCK,
                'cpu' => GameOption::LIZARD,
                'outcome' => GameResult::LOSE
            ],
            [
                'player' => GameOption::SPOCK,
                'cpu' => GameOption::SPOCK,
                'outcome' => GameResult::DRAW
            ]
        ];

        $action = new DecideOutcome();

        foreach($outcomes as $outcome) {
            $result = $action->handle($outcome['player'], $outcome['cpu']);
            $this->assertEquals($outcome['outcome'], $result->result, $outcome['player']->value . ' vs ' . $outcome['cpu']->value);
        }

    }
}
