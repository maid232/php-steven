
 <?php
    
    class CarView{
        
        private $carview = array();
        
             /** a method get carview **/
             public function getCarView(){
                return $this->carview;
             }
        
              /** a method add car **/
             public function addCar($cars){
                $this->carview[] = $cars;
             }
     
    }
    
   
 ?>
  