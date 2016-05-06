<?php 
include_once('Radioprogramma.php');
include_once('Liedje.php');
?>

<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'nav.php'; ?>
</head>
<style>

</style>
<body>
</body>


<div class="main">
    <div class="content">
        <h2> Radioprogramma </h2>

        <?php
        	$ditprogramma = new Radioprogramma();
        	$ditprogramma->setNaam("Mijn eerste programma");
        	$ditprogramma->setOmschrijving("Even testen");
        	foreach($ditprogramma->getProgramma() as $P) {
        		echo $P ."<br>";
        	}
        	$nieuwliedje = new Liedje("Titel", "Artiest");
        	$ditprogramma->voegLiedjeToe($nieuwliedje);
        	foreach($ditprogramma->getLiedjes() as $liedje) {
        		echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
        	}
        ?>