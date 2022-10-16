<?php

namespace BrainGames\Games\Calc;

function calc()
{
    $gameData['header'] = 'What is the result of the expression?';

    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(0, 99);
        $randNum2 = rand(0, 99);
        $sign = randSign();
        $gameData[$i]['question'] = "Question: {$randNum1} {$sign} {$randNum2}";
        switch ($sign) {
            case "+":
                $correctAnswer = $randNum1 + $randNum2;
                break;
            case "-":
                $correctAnswer = $randNum1 - $randNum2;
                break;
            case "*":
                $correctAnswer = $randNum1 * $randNum2;
                break;
        }
        $gameData[$i][1] = "{$correctAnswer}";
    }
    return $gameData;
}

function randSign()
{
    $arrSign = ["+", "-", "*"];
    $randKey = array_rand($arrSign);
    $sign = $arrSign[$randKey];
    return $sign;
}