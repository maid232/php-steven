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
    body{
        text-align:center;
    }
    </style>
<body>
</body>
</html><?
$leeftijd = 5;
$geld = 10;


if ($leeftijd >65){
     $korting = 0.5;
}
elseif ($leeftijd <3){
     $korting = 0;
}
elseif ($leeftijd <12){
     $korting = 0.5;
}
else{
    $korting = 1;
     
}
     
     echo "het is " . $geld * $korting . " $"; 


?>

