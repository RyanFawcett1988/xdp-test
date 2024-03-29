<?php

namespace App\Enums;

enum GameOption: string
{
    case ROCK = 'rock';
    case PAPER = 'paper';
    case SCISSORS = 'scissors';
    case LIZARD = 'lizard';
    case SPOCK = 'spock';
}