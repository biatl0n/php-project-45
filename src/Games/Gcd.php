<?php

namespace BrainGames\Games\Gcd;

function gcd()
{
    $gameData = [];
    $gameData['header'] = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < 3; $i++) {
        $correctAnswer = '';
        $randNum1 = rand(1, 199);
        $randNum2 = rand(1, 199);
        $min = min($randNum1, $randNum2);
        $gameData[$i] = ['question' => "Question: {$randNum1} {$randNum2}"];
        $correctAnswer = checkGcd($randNum1, $randNum2, $min);
        $gameData[$i][1] = "{$correctAnswer}";
    }
    return $gameData;
}

function checkGcd(int $randNum1, int $randNum2, int $min)
{
    for ($i = 1; $i <= $min; $i++) {
        if ($randNum1 % $i === 0 && $randNum2 % $i === 0) {
            $correctAnswer = $i;
        }
    }
    return $correctAnswer;
}
