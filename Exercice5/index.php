<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>

   <?php
   function fiji($nb, $str) {
       return ($nb . " " . $str);
   }
   echo fiji(4, "mooncake");
   ?>
</body>
</html>