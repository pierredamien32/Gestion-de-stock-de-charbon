<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="DELETE FROM `ventecharbon` WHERE `ventecharbon`.`id` = '$id'";
    $delete=$connexion->query($requete);
    header('Location:affichestockvente.php');
    
?>