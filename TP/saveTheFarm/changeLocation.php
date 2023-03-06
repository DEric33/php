<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  
  global $location;
  
  echo "Where do you want to go?\n";
  $where = readline(">> ");
  $where = strtolower($where);

  echo "\n";

  if ($location === "kitchen" && $where==="bathroom"){
    echo "You go to: $where.\n";
    $location = $where;
  } elseif ($location === "kitchen" && $where === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
    $location = $where;
  } elseif ($location === "bathroom" && $where === "kitchen"){
    echo "You go to: $where.\n";
    $location = $where;
  } elseif ($location === "woods" && $where === "kitchen"){
    echo "You go to: $where.\n";
    $location = $where;
  } elseif ($where === "woods" || $where === "kitchen"|| $where === "bathroom"){
     echo "You can't go directly to $where. Try going somewhere else first.\n";
  } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }

  
}