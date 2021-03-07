<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd miles to go before I ${verb},\nAnd miles to go before I ${verb}.\n";
  $story = str_replace("miles", $distance_unit, $story);
  return $story;
}

echo generateStory("lion", "do", "black", "meters");
echo generateStory("pen", "eat", "red", "inches");
echo generateStory("hoodie", "sleep", "silver", "millimeters");
