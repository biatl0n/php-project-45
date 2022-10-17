<?php

namespace BrainGames\Games\Progression;

function progression()
{
    $gameData = [];
    $gameData['header'] = 'What number is missing in the progression?';

    for ($k = 0; $k < 3; $k++) {
        $correctAnswer = "";
        $question = "";
        $randStart = rand(0, 20);
        $randEnd = $randStart + 10;
        $randJ = rand(1, 20);
        $randProgression = rand(0, 2);
        $randPosition = rand($randStart, $randEnd - 1);

        for ($i = $randStart, $j = $randJ; $i < $randEnd; $i++) {
            switch ($randProgression) {
                case 0:
                    $j += 2;
                    break;
                case 1:
                    $j++;
                    break;
                case 2:
                    $j += 3;
                    break;
            }
            if ($i !== $randPosition) {
                $question .= "{$j} ";
            } else {
                $question .= ".. ";
                $correctAnswer = $j;
            }
        }
        $gameData[$k] = ['question' => "Question: {$question}"];
        $gameData[$k][1] = "{$correctAnswer}";
    }
    return $gameData;
}
