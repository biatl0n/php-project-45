<?php
namespace BrainGames\Cli;
require_once 'vendor/autoload.php';

use function cli\line;
use function cli\prompt;

function welcome(){
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
	line("Helli, %s!", $name);
}
