<?php

namespace Tests\Unit\DTO;

use PHPUnit\Framework\TestCase;

use App\DTO\OutcomeDTO;
use App\Enums\GameResult;

class OutcomeDTOTest extends TestCase
{

    function test_constructor(): void
    {
        $outcome = new OutComeDTO(GameResult::WIN, 'You Win!');
        $this->assertEquals(OutcomeDTO::class, get_class($outcome));
    }

}
