<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="DELETE FROM `achatvente` WHERE `achatvente`.`id` = '$id'";
    $delete=$connexion->query($requete);
    header('Location:affichestock.php');
    //require 'affichestock.php';
?>