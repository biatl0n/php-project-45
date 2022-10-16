<?php

namespace BrainGames\Games\Even;

function even()
{
    $gameData = [];
    $gameData['header'] = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(0, 99);
        $isEven = $randNum % 2 === 0 ? true : false;
        $correctAnswer = $isEven ? 'yes' : 'no';
        $gameData[$i] = ['question' => "Question: {$randNum}"];
        $gameData[$i][0] = $randNum;
        $gameData[$i][1] = "{$correctAnswer}";
    }
    return $gameData;
}
