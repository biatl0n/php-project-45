<?php

namespace BrainGames\Games\Calc;

function calc()
{
    $gameData = [];
    $gameData['header'] = 'What is the result of the expression?';
    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(0, 99);
        $randNum2 = rand(0, 99);
        (string)$sign = randSign();
        $gameData[$i] = ['question' => "Question: {$randNum1} {$sign} {$randNum2}"];
        if ($sign === '*') {
            $correctAnswer = $randNum1 * $randNum2;
        } elseif ($sign === '+') {
            $correctAnswer = $randNum1 + $randNum2;
        } elseif ($sign === '-') {
            $correctAnswer = $randNum1 - $randNum2;
        } else {
            $correctAnswer = 'Error';
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
