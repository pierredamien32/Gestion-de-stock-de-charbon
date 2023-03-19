<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vente | Charbon</title>
</head>

<body class="bodyVente">
    <nav>
            <a href="affichestockvente.php" id="stock-vente">Voir le stock de la vente</a>
            <a href="index.php" id="stock-vente">Faire un Achat</a>
    </nav>
    <fieldset>
        <legend><h1>Vente de Charbon</h1></legend>
        <form action="insertvente.php" method="post">

            <input type="text" name="client" id="" class="input" placeholder="Entrer une description du client" required="required">

            <input type="number" name="nombre" id="" class="input" placeholder="Entrer le nombre de sac payer" required="required">

            <input type="number" name="prix_unitaire" id="" class="input" placeholder="Entrer le prix unitaire" required="required">

            <input type="number" name="prix" id="" class="input" placeholder="Entrer le prix payer" required="required">

            <input type="date" name="date" id="date" placeholder="Entrer la date du jour" required="required">
            <div class="bouton">
                <input type="submit" value="Vendre" id="bouton" name="bouton-vendre">

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