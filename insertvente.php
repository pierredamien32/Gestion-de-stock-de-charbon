<?php
    require 'connexion.php';
    
    if(isset($_POST['bouton-vendre'])){
        if(!empty($_POST['client']) && !empty($_POST['nombre']) && !empty($_POST['prix_unitaire']) && !empty($_POST['prix']) && !empty($_POST['date'])){
            $client=htmlspecialchars($_POST['client']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $pu=htmlspecialchars($_POST['prix_unitaire']);
            $prix=htmlspecialchars($_POST['prix']);
            $date=htmlspecialchars($_POST['date']);

            $requete= "INSERT INTO `ventecharbon` (client, nombre, prix_unitaire, prix, date)
            VALUES ('$client', '$nombre', '$pu', '$prix', '$date')";
            $insert=$connexion->query($requete);
            echo 'succès';
            require 'affichestockvente.php';
        }
    }
?>