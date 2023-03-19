<?php
    class Achat{
        private String $descriptFournisseur;
        private int $nombre;
        private float $prix_unitaire;
        private float $prix_payer;
        private $date;

        public function __construct($fournisseur, $nbre, $pu, $prix, $date){
            $this->descriptFournisseur=$fournisseur;
            $this->nombre=$nbre;
            $this->prix_unitaire=$pu;
            $this->prix_payer=$prix;
            $this->date=$date;
        }

        //Création des getters
        public function getDescriptFournisseur(){
            return $this->descriptFournisseur;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getPrix_unitaire(){
            return $this->prix_unitaire;
        }

        public function getPrix_payer(){
            return $this->prix_payer;
        }

        public function getDate(){
            return $this->date;
        }

        //Création des setters
        public function setDescriptFournisseur($newfournisseur){
            $this->descriptFournisseur=$newfournisseur;
        }
        
        public function setNombre($newnbre){
            $this->nombre=$newnbre;
        }

        public function setPrix_unitaire($newpu){
            $this->prix_unitaire=$newpu;
        }

        public function setPrix_payer($newprix){
           $this->prix_payer=$newprix;
        }

        public function setDate($newdate){
            $this->date=$newdate;
        }
    }

    $achat= new Achat('cc',5,5000,8000,'02/10/2012');
    echo $achat->getDate();
?>