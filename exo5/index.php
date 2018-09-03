<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body> 
        <!-- Création du formulaire et envoie des informations avec la méthode "GET" -->
        <form method="get">
            <select id="civility" name="civility">
                <option selected disabled>Veuillez selectionnez une option</option>
                <option value="Mr"> Mr</option>
                <option value="Mme"> Mme</option>         
            </select>
            <label for="lastname"> Votre prénom :</label><input type="text" name="lastname" /> 
             <label for="firstname"> Votre Nom :</label><input type="text" name="firstname" />
            <input type="submit" value="Valider">

            <?php
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Veuiller rentrez un truc correct uesh';
            }
            ?>
        </form>
    </body>
</html>