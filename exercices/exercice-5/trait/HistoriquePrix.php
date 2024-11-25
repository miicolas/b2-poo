<?php
    trait HistoriquePrix {

        private $historique = [] ;

        public function ajouterHistorique(float $prix){
            $this->historique[] = $prix ;
        }

        public function afficherHistorique(){
            return $this->historique;
        }
    }
?>