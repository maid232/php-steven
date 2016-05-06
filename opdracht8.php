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
<table border="2">
   
</html>
<?php 
	function celsiusNaarFahrenheit($celsius) {
		$fahrenheit = ($celsius * 1.8 ) + 32;
		return $fahrenheit;
	}
    
    function deelbaarDoorDrie($getal) { 
        
        if( $getal % 3 != 0) {
            $boolean = FALSE;
        }
        
        else {
            $boolean = TRUE;
        }
         
         return $boolean;   
    }		
	
?>

<div class="main">
    <div class="content">
        <h2> Functies </h2>
        <div class="functie1"> 
            <br>
            <h4> Celsius naar Fahrenheit </h4>
            <form name="form" action="" method="post">
                <input type="number" name="temperatuur" id="temperatuur" placeholder="temperatuur">
            </form>
            <?php
                if($_POST["temperatuur"] != 0) {
                    echo "Celsius: " .  $_POST["temperatuur"] . "<br> Temperatuur in fahrenheit: " . celsiusNaarFahrenheit($_POST ["temperatuur"]);
                }
            ?>
        </div>
        
        <div class="functie2">
            <br>
            <h4> Deelbaar door 3 </h4>
            <form name="form" action="" method="post">
                <input type="number" name="deelbaarGetal" id="deelbaarGetal" placeholder="Vul een getal in">
            </form>
            <?php
                if($_POST["deelbaarGetal"] != 0) { 
                    if(deelbaarDoorDrie($_POST["deelbaarGetal"])) {
                        echo"ja";
                    }
                    
                    else{
                        echo"nee";
                    }
                }
            ?>
            
        </div>
        
        <div class="functie3">
            <br>
            <h4> Omgekeerde zin </h4>
            <form name="form" action="" method="post">
                <input type="field" name="omgekeerdeString" id="omgekeerdeString" placeholder="Vul een zin in">
            </form>
            
            <?php 
                if($_POST["omgekeerdeString"] != "") {
                   echo strrev($_POST["omgekeerdeString"]);  
                }
            ?>      
        </div> 
    </div>
</div>
