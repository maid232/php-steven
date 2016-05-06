<?php
    class Programma{
        private $naam = "";
        private $omschrijving = "";
        private $liedjes = array();
        
        public function voegLiedjeToe($liedje){
            $this->liedjes[] = $liedje;
        }
        
        public function getLiedjes() {
            return $this->liedjes;
        }
        
        
            /**Return program information @return array **/
            function getProgramma(){
                return array($this->naam, $this->omschrijving);
            }
        
        
            /**Return program information @return array **/
            function setNaam($n){
                if(strlen($n)>=3){
                    $this->naam = $n;
                }
                
            }
        
            /**Return program information @return array **/
            function setOmschrijving($o){
                $this->omschrijving = $o;
            }
      
    }
?>