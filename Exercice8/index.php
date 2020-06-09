<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
</head>
<body>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.</p>

<?php

function fiji ($firstNumber = 1, $secondNumber =4, $thirdNumber = 7) {

    return ($firstNumber + $secondNumber + $thirdNumber);
}
echo fiji();

?>
</body>
</html>