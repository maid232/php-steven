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
<h2> kapperzaak </h2>
</html>
<?
 
           
            $tijdstip["9.15"] = "Mevr. Pietersen";
            $tijdstip["9.30"] = "Mevr. Willems";
            $tijdstip["9.45"] = "";
            $tijdstip["10.00"] = "Paul van den Broek";
            $tijdstip["10.15"] = "Karel de Meeuw";
            $tijdstip["10.30"] = "";
        
            print("De volgende momenten zijn nog beschikbaar:<ul>");
                foreach($tijdstip as $tijd => $naam) {
                    if($naam == ""){ 
                        print("<li>".$tijd."</li>");
                        }
                }
            print("</ul>");

 
?>
