<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){

  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count++;

  $num = rand(1,10);

  echo "\nMake your guess...\n";
  echo "\nPlease only between 1-10 :)\n";
  $guess = intval(readline(">> "));

  
  echo "\nROUND ${play_count}\n";
  echo "Number i thought of: ${num}\n";
  echo "Number you guessed: ${guess}\n";

  if ($guess === $num) $correct_guesses++;
  elseif ($guess > $num) $guess_high++;
  else $guess_low++;
 
  }

  for ($i=0;$i<10;$i++){
    guessNumber();
  }

  $correct_guesses_percent = $correct_guesses/$play_count*100;

  echo "\nYou guessed correctly ${correct_guesses_percent}% of the time!\n";
  if ($guess_high > $guess_low){
    echo "\nWhen you guessed wrong, you tended to guess high.\n";
  } elseif ($guess_high < $guess_low){
    echo "\nWhen you guessed wrong, you tended to guess low.\n";
  }


