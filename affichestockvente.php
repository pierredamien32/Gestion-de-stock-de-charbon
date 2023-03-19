<?php
    require 'connexion.php';
    $requete="SELECT * FROM `ventecharbon` ORDER BY id DESC ";
    $recupere=$connexion->query($requete);
    $tab=$recupere->fetchall();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        <title>Stock</title>
    </head>
    <body class="bodyVente">
        <nav>
            <a href="index.php" id="stock-vente">Faire un achat</a>
            <a href="vente.php" id="achat">Effectuer une vente</a>
        </nav>
        <table class="tableau-style">
            <thead>
                <tr>
                    <th>Vente numéro</th>
                    <th>Description du client</th>
                    <th>nombre de charbon</th>
                    <th>Le prix unitaire</th>
                    <th>Le prix payer</th>
                    <th>Date de la vente</th>
                    <th colspan="3">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($tab as $element){
                    ?>
                    <tr>
                        <td><?=$element['id'];?></td>
                        <td><?=$element['client'];?></td>
                        <td><?=$element['nombre'];?></td>
                        <td><?=$element['prix_unitaire'];?></td>
                        <td><?=$element['prix'];?></td>
                        <td><?=$element['date'];?></td>
                        <td><a href="modificationvente.php?id=<?=$element['id'];?>">Modifier</a></td>
                        <td><a href="deletevente.php?id=<?=$element['id'];?>" onClick="return confirmation();" id="supprimer">Supprimer</a></td>
                        <td><a href="voirplusvente.php?id=<?=$element['id'];?>" >Voir plus</a></td>
                    </tr>
                    <?php
                }
                
                ?>
            </tbody>
        </table>
        <script src="app.js"></script>
    </body>
    </html>
    <?php
    

?>