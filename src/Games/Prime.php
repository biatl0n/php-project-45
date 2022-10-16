<?php

namespace BrainGames\Games\Prime;

function prime()
{
    $gameData = [];
    $correctAnswer = 0;
    $gameData['header'] = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(0, 999);
        $gameData[$i]['question'] = "Question: {$randNum}";
        for ($j = 2; $j < $randNum; $j++) {
            $correctAnswer = 'yes';
            if ($randNum % $j == 0) {
                $correctAnswer = 'no';
                break;
            }
        }
        $gameData[$i][1] = "{$correctAnswer}";
    }
    return ($gameData);
}
