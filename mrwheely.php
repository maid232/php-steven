<?php

error_reporting(E_ERROR|E_PARSE);
include_once('Lib/Car.php');
include_once('Lib/carView.php');

$merk = $_POST['merk'];
$minprijs = $_POST["minprijs"];
$maxprijs = $_POST["maxprijs"];




    
$ncar = new carView();

$ncar->addCar(new Car("Audi", 1000,"Img/audi1.jpg"));
$ncar->addCar(new Car("Ferrari", 1001,"Img/ferrari1.jpg"));
$ncar->addCar(new Car("Fiat", 1001,"Img/fiat2.jpg"));
$ncar->addCar(new Car("Mercedes", 1001,"Img/mercedes1.jpg"));


?>


<html>
<head>
  <style>
  </style>
</head>
<body>
  <div class="main">

        <h2> Mr Wheely! </h2>

        <form action="mrwheely.php" method="POST">
            <label for="sel1">Merk:</label>
                <select class="form-control" name="merk">
                         <option value="">Alle merken</option> 
                         <option value='Audi' >Audi</option> 
                         <option value='Ferrari' >Ferrari</option> 
                         <option value='Fiat' >Fiat</option> 
                         <option value='Mercedes' >Mercedes</option> 
                         <option value='Opel' >Opel</option> 
                         <option value='Volkswagen' >Volkswagen</option> 
                </select>
                 <br>
                <label>Minimale prijs:</label><br>
                <input class="form-control" type="text" name="minprijs" autocomplete="off" value="<?=$minprijs?>"><br>
                <label>Maximale prijs:</label><br>
                <input class="form-control" type="text" name="maxprijs" autocomplete="off" value="<?=$maxprijs?>"><br>
                <input type="submit" name="knop" value="Selecteren" class="btn btn-default">
         </form>
   <div class="row">         
   <?php
       
     
      foreach($ncar->getCarView() as $car){ 
           
           if($minprijs == ""){
              $minprijs = 1;
           }
           if($maxprijs == ""){
              $maxprijs = 10000;
           }
          
           if($merk != ""){
                if (!($car->getMerk() == $merk && ($car->getPrijs() >= $minprijs && $car->getPrijs() <= $maxprijs))){
                    continue;
                }
            }
            else{
                if(!($car->getPrijs() >= $minprijs && $car->getPrijs() <= $maxprijs)){
                    continue;
                }
            }
      
         ?>
        
        </div>
     
                         <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="test">€<?=$car->getPrijs();?></div> 
                                        <img src="<?=$car->getUrl();?>"  class="img-responsive">
                                        <h4 class="center"><?=$car->getMerk();?></h4>
                                        
                                    </div>
                                </div>
                            </div>  
                          </div>
                          
                          
        <?php
      }
          
      ?>                
                          
   
  
   
  
  </div>         
         
         
</body>     
</html>
