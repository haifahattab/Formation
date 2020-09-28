<?php
    class impot
    {
        private $nom;
        private $revenu;

    
        public function __construct($n, $r)
        {
            $this->nom = $n;
            $this->revenu = $r;
        }
        
        public function calculeImpot()
        {
            if($this->revenu>15000){
                $impot = $this->revenu * 0.2;
            }else{
                $impot = $this->revenu * 0.15;
            }
            return $impot;
        }
        public function afficheImpot()
        {
            echo "<script type=\"text/javascript\">alert(' Monsieur $this->nom ,votre impot est de ".$this->calculeImpot()." euros. ')</script>";        }
    }


?>