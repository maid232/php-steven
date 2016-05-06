<?php

    include_once('auto.php');

    $ditprogramma = new auto();
    $ditprogramma->setNaam("Mijn eerste programma");
    $ditprogramma->setOmschrijving("Even testen");

    foreach($ditprogramma->getProgramma() as $p){
        echo $p. "<br>";
    }

?>