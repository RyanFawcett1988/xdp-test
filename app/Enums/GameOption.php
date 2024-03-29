<?php

namespace App\Enums;

enum GameOption: string
{
    case ROCK = 'rock';
    case PAPER = 'paper';
    case SCISSORS = 'scissors';
    case LIZARD = 'lizard';
    case SPOCK = 'spock';

    public static function values(): array
    {
        $values = [];
        foreach(GameOption::cases() as $case) {
            $values[] = $case->value;
        }
        return $values;
    }
}