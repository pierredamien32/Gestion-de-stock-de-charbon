<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Achat | Charbon</title>
</head>
<body class="bodyAchat">
    <nav>
            <a href="affichestock.php" id="stock-achat">Voir le stock de l'achat</a>
            <a href="vente.php" id="vente">Effectuer une vente</a>
    </nav>
    <fieldset>
        <legend><h1>Achat de Charbon</h1></legend>
        <form action="insertion.php" method="post">

            <input type="text" name="fournisseur" id="" class="input" placeholder="Entrer une description du fournisseur" required="required">

            <input type="number" name="nombre" id="" class="input" placeholder="Entrer le nombre de sac payer" required="required">

            <input type="number" name="prix_unitaire" id="" class="input" placeholder="Entrer le prix unitaire" required="required">

            <input type="number" name="prix" id="" class="input" placeholder="Entrer le prix payer" required="required">

            <input type="date" name="date" id="date" placeholder="Entrer la date du jour" required="required">

            <div class="bouton">
                <input type="submit" value="Acheter" id="bouton" name="bouton-achat">

                <input type="reset" value="Annuler" >
            </div>
        </form>
    </fieldset>
    <footer>
        &copy; 2022 Copyright Mr-Top. All Rights Reseved
        Designed by <a href="https://web.facebook.com/pierre.tohou.35"> MrTop </a>
    </footer>
</body>
</html>