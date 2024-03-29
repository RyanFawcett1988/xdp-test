<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\TestCase;

use App\Enums\GameOption;

class GameOptionTest extends TestCase
{
    public function test_values(): void
    {
        $this->assertEquals(
            [
                "rock",
                "paper",
                "scissors",
                "lizard",
                "spock"
            ],
            GameOption::values()
        );
    }
}
