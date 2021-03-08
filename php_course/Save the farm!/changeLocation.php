<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $where_to_go = strtolower(readline(">> "));
  if ($location === "kitchen" && $where_to_go === "bathroom"){
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  } elseif ($location === "kitchen" && $where_to_go === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = "woods";
  } elseif ($location === "bathroom" && $where_to_go === "kitchen"){
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($location === "woods" && $where_to_go === "kitchen"){
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($where_to_go === "woods" || $where_to_go === "kitchen" ||$where_to_go === "bathroom"){
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}
