<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gameLogic(string $gameName)
{
    $gameData = [];
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $callBackFunc = 'BrainGames\Games\\' . $gameName;
    $gameData = is_callable($callBackFunc) ? $callBackFunc() : "";
    $correctAnswersCount = 0;
    line($gameData['header']);
    do {
        line("{$gameData[$correctAnswersCount]['question']}");
        $answer = prompt('Your answer');
        if (mb_strtolower($answer) === $gameData[$correctAnswersCount][1]) {
            line('Correct!');
            $correctAnswersCount++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$gameData[$correctAnswersCount][1]}'.");
            line("Let's try again, {$name}!");
            break;
        }
    } while ($correctAnswersCount !== 3);
    if ($correctAnswersCount === 3) {
        line("Congratulations, %s!", $name);
    }
}
