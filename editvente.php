<?php
    require 'connexion.php';
    
    if(isset($_POST['bouton-vente'])){
        if(!empty($_POST['id']) && !empty($_POST['client']) && !empty($_POST['nombre']) && !empty($_POST['prix_unitaire']) && !empty($_POST['prix']) && !empty($_POST['date'])){
            $id= htmlspecialchars($_POST['id']);
            $client=htmlspecialchars($_POST['client']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $prix_unitaire=htmlspecialchars($_POST['prix_unitaire']);
            $prix=htmlspecialchars($_POST['prix']);
            $date=htmlspecialchars($_POST['date']);
            $requete= "UPDATE `ventecharbon` SET `client` = '$client', `nombre` = '$nombre', 
            `prix_unitaire` = '$prix_unitaire', `prix` = '$prix', `date` = '$date'
            WHERE `ventecharbon`.`id` = '$id'";
            $edit=$connexion->query($requete);
            $edit->execute();
            require 'affichestockvente.php';
        }
        
    }
?>