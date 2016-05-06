<?php
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
<h2> Voer uw leeftijd in </h2>
<form name="form" action="" method="get">
  <input type="text" name="leeftijd" id="leeftijd" placeholder="leeftijd">
</html>
<?
 $leeftijdgetal =  $_GET["leeftijd"];
 $prijs = 10;
 if ($leeftijdgetal > 65 || $leeftijdgetal <=12 && $leeftijdgetal >=3) {
     echo "U moet" . " " . $prijs * 0.50  . " " .  "euro betalen";
 }
 
  else if ($leeftijdgetal < 3 && $leeftijdgetal > 0) {
     echo "Je mag gratis mee";
 }
 else if ($leeftijdgetal < 65 && $leeftijdgetal >12) {
     echo "U moet" . " " . $prijs  . " " .  "euro betalen";
 }
 
 else { 
     echo "Voer een waarde in";
 }
 ?>
 
?>
