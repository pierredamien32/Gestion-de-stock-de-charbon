<?php
    class Vente{
        private String $descriptClient;
        private int $nombre;
        private float $prix_unitaire;
        private float $prix_payer;
        private $date;

        public function __construct($client, $nbre, $pu, $prix, $date){
            $this->descriptClient=$client;
            $this->nombre=$nbre;
            $this->prix_unitaire=$pu;
            $this->prix_payer=$prix;
            $this->date=$date;
        }

        //Création des getters
        public function getDescriptClient(){
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
        public function setDescriptClient($newclient){
            $this->descriptFournisseur=$newclient;
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

    $vente= new Vente('cc',5,5000,8000,'02/10/2012');
    echo $achat->getDate();
?>