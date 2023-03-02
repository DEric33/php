<?php
    $play_count=0;
    $correct_guess=0;
    $guess_high=0;
    $guess_low=0;

function guessNumber(){
global $play_count, $correct_guess, $guess_high, $guess_low;
       
    $play_count++;
    $number = rand(1,10);
    $answer="";

    echo "\nQuel est le nombre secret ? \n";
    do {
        $answer = (int)(readline(" >> "));
} while ($answer == "" || $answer>10);

    echo "\nRound: $play_count\nMon Nombre: $number\nVotre idée: $answer";
 // $somme= ((int)$answer) + ((int)$number);
 // echo "\nans + numb = ".$somme;

  if ((int)$answer>(int)$number){
    $guess_high++;
    echo "\nPlus haut : ".$guess_high;
  } elseif ((int)$answer<(int)$number) {
    $guess_low++;
    echo "\nPlus bas : ".$guess_low;
  } else {
    $correct_guess++;
    echo "\nCorrect ".$correct_guess;
  }

  //echo "\ncorrectguess = ".$correct_guess;
}


system('cls');

while($play_count<5){


echo "\nJe vais penser à des nombres entre 1 et 10 (inclus). Pensez-vous que vous pouvez deviner correctement?\n";

echo guessNumber();

}


$guess_right = strval((int)$correct_guess / (int)$play_count) *100;
echo "\n".$guess_right." % de nombres trouvés !";
echo "\n".$guess_low." réponses en dessous !";
echo "\n".$correct_guess." bonnes réponses !";

if ((int)$guess_high>(int)$guess_low){
    echo "\nWhen you guessed wrong, you tended to guess high.";
} elseif ((int)$guess_low>(int)$guess_high){
    echo "\nWhen you guessed wrong, you tended to guess low.";
} else {
    echo "\nYou guess egal high and low";
}