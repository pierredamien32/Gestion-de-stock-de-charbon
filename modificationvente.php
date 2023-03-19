<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="SELECT * FROM `ventecharbon` WHERE id='$id'";
    $recupere=$connexion->query($requete);
    $tab=$recupere->fetch();
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" >
            <title>Modification | Vente</title>
        </head>
        <body class="bodyVente">
            
            <fieldset>
                <legend><h1>Modification de la vente numéro: <?php echo $tab['id'];?></h1></legend>
                <form action="editvente.php" method="post">

                    <input type="text" name="client" id="" value="<?php echo $tab['client'];?>" required="required">

                    <input type="number" name="nombre" id="" value="<?php echo $tab['nombre'];?>" required="required">

                    <input type="number" name="prix_unitaire" id="" value="<?php echo $tab['prix_unitaire'];?>" required="required">

                    <input type="number" name="prix" id="" value="<?php echo $tab['prix'];?>" required="required">

                    <input type="date" name="date" id="date" value="<?php echo $tab['date'];?>" required="required">

                    <input type="hidden" name="id" value="<?php echo $tab['id'];?>">

                    <input type="submit" value="Modifier" id="bouton" name="bouton-vente">

                </form>
            </fieldset>
                        <a href="affichestockvente.php" id="lien-index">Voir le stock de la vente</a>
            <footer>
                        &copy; 2022 Copyright Mr-Top. All Rights Reseved
                        Designed by <a href="https://web.facebook.com/pierre.tohou.35"> MrTop </a>
            </footer>
        </body>
        </html>
    <?php
?>