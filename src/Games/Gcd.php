<?php

namespace BrainGames\Games\Gcd;

function gcd()
{
    $gameData['header'] = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(1, 199);
        $randNum2 = rand(1, 199);
        $min = min($randNum1, $randNum2);
        $gameData[$i]['question'] = "Question: {$randNum1} {$randNum2}";
        for ($j = 1; $j <= $min; $j++) {
            if ($randNum1 % $j === 0 && $randNum2 % $j === 0) {
                $correctAnswer  = $j;
            }
        }
        $gameData[$i][1] = "{$correctAnswer}";
    }
    return $gameData;
}
