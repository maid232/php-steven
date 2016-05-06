<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php
  
  class Car{
      private $merk;
      private $prijs;
      private $url;
      
      
        function __construct($m, $p, $u){
            $this->merk = $m;
            $this->prijs = $p;
            $this->url = $u;
        }
    
    
        /*** a method to get merk ***/
        public function getMerk(){
        
            return $this->merk;
        }
        
        /*** a method to set merk ***/
        public function _setMerk($merk){
    
             $this->merk = $merk;
             return $this;
        }
        
        /*** a method to get price ***/
        public function getPrijs(){
        
             return $this->prijs;
        }
        
        /*** a method to set price ***/
        public function _setPrijs($prijs){
        
             $this->prijs = $prijs;
             return $this;
        }
        
        /*** a method to get url ***/
        public function getUrl(){
         
             return $this->url;
        }
        
        /*** a method to set url ***/
        public function _setUrl($url){
         
             $this->url = $url;
             return $this;
        }
                 

  
  }
 
?>
</body>
</html>