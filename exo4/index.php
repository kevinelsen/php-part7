<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body> 
        <!-- Création du formulaire et envoie des informations avec la méthode "post" -->
        <form action="user.php" method="post">
            <p>  Votre prénom : </p>
            <input type="text" name="lastname" id="lastname" placeholder="pépé" /> 
            <p>  Votre Nom : </p>
            <input type="text" name="firstname" id="firstname" placeholder="grenouille" />
            <input type="submit" value="Valider">
        </form>
    </body>
</html>