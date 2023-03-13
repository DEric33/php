<?php

$counter=0;
while ($counter<100){
    $counter++;

    if (($counter % 3 === 0)&&($counter % 5 === 0)){
        echo "FizzBuzz\n";
  
    } elseif ($counter % 3 === 0){
        echo "Fizz\n";
     
    } elseif ($counter % 5 === 0){
        echo "Buzz\n";
      
    } else {
  echo $counter."\n";
}
}

$output = [];
for($i=1;$i<=100;$i++){
    if (($i % 3 === 0)&&($i % 5 === 0)){
        array_push($output, "FizzBuzz\n");
    
    } elseif ($i % 3 === 0){
        array_push($output, "Fizz\n");
     
    } elseif ($i % 5 === 0){
        array_push($output, "Buzz\n");
    
    } else {
        array_push($output, $i."\n");
}
}

foreach($output as $value){
    echo $value;
}

foreach ($output as $val2) {
    if ($val2 === "Fizz"){
        continue;     
    } elseif ($val2 === "FizzBuzz"){
        echo $val2;
        break;
    }
    echo $val2 . "\n";

  }