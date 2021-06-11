<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 1</title>
</head>
<body>
    <p>
        Créer un tableau contenant les 12 mois de l'année, afficher "Mars" : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php

            $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
            echo $months[2];
            /* Affichage des détails du tableau (index, valeur, type) */
            /*var_dump($months);*/

        ?>
    </div>

    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php

            $monthsBis = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
            echo $monthsBis[2];

        ?>
    </div>
</body>
</html>