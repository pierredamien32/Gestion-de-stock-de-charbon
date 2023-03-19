<?php
    require 'connexion.php';
    
    if(isset($_POST['bouton-achat'])){
        if(!empty($_POST['id']) && !empty($_POST['fournisseur']) && !empty($_POST['nombre']) && !empty($_POST['prix_unitaire']) && !empty($_POST['prix']) && !empty($_POST['date'])){
            $id= htmlspecialchars($_POST['id']);
            $fournisseur=htmlspecialchars($_POST['fournisseur']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $prix_unitaire=htmlspecialchars($_POST['prix_unitaire']);
            $prix=htmlspecialchars($_POST['prix']);
            $date=htmlspecialchars($_POST['date']);
            $requete= "UPDATE `achatvente` SET `fournisseur` = '$fournisseur', `nombre` = '$nombre', 
            `prix_unitaire` = '$prix_unitaire', `prix` = '$prix', `date` = '$date'
            WHERE `achatvente`.`id` = '$id'";
            $edit=$connexion->query($requete);
            $edit->execute();
            header('Location:affichestock.php') ;
        }
        
    }
?>