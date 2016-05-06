<?php

class Programma{
    private $naam = "";
    private $omschrijving = "";
    
    
    /**
    geeft infromatie terug van programma
    
    **/

    function getProgramma() {
        return array("naam" => $this->naam,
                     "omschrijving" => $this->omschrijving
                    );
    }
    
    function setNaam($n){
        if(strlen($n)>=2){
             $this->naam = $n
        }
       
    }

    function setNaam($omschrijving) {
        $this->omschrijving = $omschrijving;
    }
}

?>
