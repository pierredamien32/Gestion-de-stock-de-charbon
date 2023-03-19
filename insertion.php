<?php
    require 'connexion.php';
    if(isset($_POST['bouton-achat'])){
        if(!empty($_POST['fournisseur']) && !empty($_POST['nombre']) && !empty($_POST['prix_unitaire']) && !empty($_POST['prix']) && !empty($_POST['date'])){
            $fournisseur=htmlspecialchars($_POST['fournisseur']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $pu=htmlspecialchars($_POST['prix_unitaire']);
            $prix=htmlspecialchars($_POST['prix']);
            $date=htmlspecialchars($_POST['date']);

            $requete= "INSERT INTO `achatvente` (fournisseur, nombre, prix_unitaire, prix, date)
            VALUES ('$fournisseur', '$nombre', '$pu', '$prix', '$date')";
            $insert=$connexion->query($requete);
            require 'affichestock.php';
        }
    }
?>