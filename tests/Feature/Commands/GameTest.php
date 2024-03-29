<?php

namespace Tests\Feature\Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{

    function test_input_validation_fails(): void
    {
        $this->artisan('game:play')
            ->expectsQuestion('choose: rock, paper, scissors, lizard, spock', 'incorrect option')
            ->assertExitCode(1);
    }

}
