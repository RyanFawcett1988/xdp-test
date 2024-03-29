<?php

namespace App\DTO;

use App\Enums\GameResult;

class OutcomeDTO
{
    public string $message;
    public GameResult $result;

    public function __construct(GameResult $result, string $message)
    {
        $this->result = $result;
        $this->message = $message;
    }
}