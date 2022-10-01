<?php
namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function isEven($name)
{
    $correctAnswersCount = 0;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    do {
        $randNum = rand(0,999);
        $isEven = $randNum % 2 === 0 ? true : false;
        $correctAnswer = $isEven ? 'yes' : 'no';
        line("Question: {$randNum}");
        $ansver = prompt('Your answer');
        //line("{$ansver}");
        if ($isEven && mb_strtolower($ansver) === 'yes'){
            line('Correct!');
            $correctAnswersCount ++;
        } elseif (!$isEven && mb_strtolower($ansver) === 'no'){
            line('Correct!');
            $correctAnswersCount ++;
        }else {
            line("'{$ansver}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}");
            break;
        }
    } while ($correctAnswersCount !== 3);
    if ($correctAnswersCount === 3) {
        line("Congratulations, %s!", $name);
    }
}