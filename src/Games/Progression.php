<?php

namespace BrainGames\Games\Progression;

function progression()
{
    $gameData = [];
    $gameData['header'] = 'What number is missing in the progression?';
    for ($j = 0; $j < 3; $j++) {
        $resultArr = [];
        $randStart = mt_rand(1, 20);
        $randEnd = $randStart + 10;

        $randAnswer = mt_rand($randStart, $randEnd - 1);
        for ($i = $randStart; $i < $randEnd; $i++) {
            if ($i !== $randAnswer) {
                $resultArr["Progression1"][] = $i + 1;
                $resultArr["Progression2"][] = $i + $i;
                $resultArr["Progression3"][] = $i * 3;
            } else {
                $resultArr["Progression1"][] = "..";
                $resultArr["Progression2"][] = "..";
                $resultArr["Progression3"][] = "..";
                $resultArr["Progression1Answer"] = $i + 1;
                $resultArr["Progression2Answer"] = $i + $i;
                $resultArr["Progression3Answer"] = $i * 3;
            }
        }
        $rand = rand(1, 3);
        $randProgression = "Progression" . $rand;
        $correctAnswer = "Progression" . $rand . "Answer";
        $question = implode(" ", $resultArr["$randProgression"]);
        $gameData[$j]['question'] = "Question: {$question}";
        $gameData[$j][1] = "{$resultArr["$correctAnswer"]}";
    }
    return $gameData;
}
