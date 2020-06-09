<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux</p>

<?php


function fiji($firstNumber, $secondNumber) {

    if ($firstNumber > $secondNumber) {
        echo "Le premier nombre est plus grand";
    }
    else if ($firstNumber < $secondNumber) {
        echo "Le premier est plus petit";
    }
    else if ($firstNumber == $secondNumber) {
        echo "Les deux nombres sont identiques";
    }
}
echo fiji(4, 7);
?>

</body>
</html>