<?php
    class StringUtils {
        public static function secondCase($string) {
            $string = strtolower($string);
            if (strlen($string)>=2){
                $string = strtoupper($string[1]);  // majuscule de la 2eme lettre
            }
            return $string;
        }
    }

    class Pajamas {
        private $owner, $fit, $color;
        function __construct()
        {
            $this->owner="Boss";
            $this->fit="fit";
            $this->color="pink";
        }
        public function describe(){
            return "\nThe owner : $this->owner with $this->fit and $this->color like color.";
        } 
        function setFit($newFit){
            $this->fit=$newFit;
        }
    }

    class ButtonablePajamas extends Pajamas {
        private $button_state = "unbuttoned";
        public function describe(){
            return parent::describe()." and it is $this->button_state .";
        } 
        function toggleButtons(){
            if ($this->button_state === "unbuttoned") {
                $this->button_state = "buttoned";
              } else {
                $this->button_state = "unbuttoned";
              }
        }
    }

    echo StringUtils::secondCase("karot!");

    echo StringUtils::secondCase("MCDONALD");

    echo StringUtils::secondCase("baldwin");
   
    $chicken_PJs = new Pajamas("CHICKEN", "just right", "purple");

    echo $chicken_PJs->describe();

    echo "\n...they wash their PJs many times....";
    $chicken_PJs->setFit("a little more tight");
    echo "\n";
    echo $chicken_PJs->describe();

    $moose_PJs = new ButtonablePajamas("moose");
    echo $moose_PJs->describe();

    $moose_PJs->toggleButtons();
    echo "\n";
    echo $moose_PJs->describe();