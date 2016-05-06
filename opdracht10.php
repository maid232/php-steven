<?php session_start(); ?>
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
<?php 
    //inlogfunctie
    function inloggen ($naam, $wachtwoord) {
        $users = array(
        'piet@worldonline.nl' => array('pwd' => 'doetje123', 'rol' => 'gebruiker' ),
        'klaas@carpets.nl' => array('pwd' => 'snoepje777', 'rol' => 'gebruiker'),
        'admin' => array('pwd' => 'admin', 'rol' => 'admin'),
        'truushendriks@wegweg.nl' => array('pwd' => 'arkiearkie201', 'rol' => 'gebruiker')
        );
	   
        if(isset($users[$naam]) && $users[$naam]["pwd"] == $wachtwoord) {
            $_SESSION["user"] = array("naam" => $naam, 
                                      "pwd" => $users[$naam]['pwd'],
                                      "rol" => $users[$naam]['rol']);
            return true;
        } else {
            return false;
        }
	}  
    
    
?>


<div class="main">
    <div class="content">
        <h2> Inlogpagina </h2>
        <form name="form" action="" method="post">
            <input type="text" name="naam" id="naam" placeholder="Naam"> <br/><br/>
            <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord"><br/><br/>
            <input type="submit" value="Inloggen" name="submit">
        </form>

        <h5 style="color:#ff0000;"> 
            <?php 
            //aanroepen inlogfunctie
            if(inloggen($_POST['naam'], $_POST['wachtwoord'])){
                $message = "Welkom " . $_SESSION["user"]['naam'] . " met de rol " 
                                     . $_SESSION["user"]["rol"];
            } else {
                if($_POST['naam'] != ""){
                $message = "Onbekende login/wachtwoord";
                }
            }
            echo $message ?> 
            <br>
            <a href="/admin.php">Adminpagina </a> 
            <a href="/logout">uitloggen</a>
        </h5>
    </div>
</div>
