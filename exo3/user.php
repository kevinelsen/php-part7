<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <form action="user.php" method="get">
            <?php
            if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Veuiller rentrez un truc correct uesh';
            }
            ?>
        </form>
    </body>
</html>