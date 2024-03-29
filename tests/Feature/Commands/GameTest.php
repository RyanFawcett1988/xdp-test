<?php

namespace Tests\Feature\Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Enums\GameOption;

class GameTest extends TestCase
{

    function test_input_validation_fails(): void
    {
        $this->artisan('game:play')
            ->expectsQuestion('choose: rock, paper, scissors, lizard, spock', 'incorrect option')
            ->assertExitCode(1);
    }

    function test_input_values(): void
    {
        foreach(GameOption::values() as $value) {
            $this->artisan('game:play')
                ->expectsQuestion('choose: rock, paper, scissors, lizard, spock', $value)
                ->assertExitCode(0);
        }
    }

}
