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
 <h2> Dynamisch inlogformulier met $_POST </h2>
        
           
            <form name="form" action="opdracht9.php" method="post">
                <input type="text" name="naam" id="naam" placeholder="Naam"> <br/><br/>
                <input type="text" name="adres" id="adres" placeholder="Adres"><br/><br/>
                <input type="email" name="email" id="email" placeholder="E-mail"><br/><br/>
                <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord"><br/><br/>
                
                <input type="submit" value="Verstuur" name="submit">
            </form>
            
            <?php 
            
            if (isset($_POST["submit"])){
                $melding = "Voer alstublieft alle gegevens correct in.";
                if(!empty($_POST["naam"]) || !empty($_POST["adres"]) || !empty($_POST["email"]) || !empty($_POST["wachtwoord"])) {
                    print_r($_POST);   
                }
                else {
                echo "<script type='text/javascript'>alert('$melding');</script>";
               
            }
                
            }  
            
      
            ?>