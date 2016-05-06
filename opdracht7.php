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
img {
    width: 50px;
}
</style>
<body>
</body>
<h2> Zwemclub </h2>
<table border="2">
   
</html>
<?
 
           
                $zwemclub["De spartelkuikens"] = 25;
                $zwemclub["De waterbuffels"] = 32;
                $zwemclub["Plonsmderin"] = 11;
                $zwemclub["Bommetje"] = 23;
                
                foreach( $zwemclub as $label => $waarde ) {
                    echo "<tr> <td>" .$label."</td> <td>" . $waarde. "</td> <td>";
                
                $aantalplaatjes = floor($waarde / 5);
                    for($i = 0; $i < $aantalplaatjes; $i++ ) {  
                        
                    echo "<img src=\"http://i.imgur.com/3C8ibyG.png\"> </img>" ;  
                    
                    }
                    echo "</td> </tr>";
                } 
           

 
?>
