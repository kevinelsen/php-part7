<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body> 
        <?php
        if (empty($_GET)) {
            ?>
            <!-- Création du formulaire et envoie des informations avec la méthode "GET" -->
            <form method="get">
                <select name="civility">
                    <option> Mr</option>
                    <option> Mme</option>         
                </select>
                <label for="lastname" id="lastname"> Votre prénom :</label><input type="text" name="lastname" /> 
                <label for="firstname"id="firstname"> Votre Nom :</label><input type="text" name="firstname" />
                <input type="submit" value="Valider">
                <?php
            }
            ?>
            <?php
            if (!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['civility'])) {
                echo $_GET['civility'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Veuiller rentrez un truc correct uesh';
            }
            ?>
        </form>
    </body>
</html>