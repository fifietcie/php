<?php
/* include('./header.php'); */ //permet de linker les autres pages php
/* include_once = linker une seule fois */
require './header.php'; /* à la difference de "include" si il y a une erreur il s'arrete  */
//"echo" = affichage
?>

<?php

echo "<h1>Ceppic PHP</h1>"; // on peut aussi utilser "print"

$variable = 'une variable'; //pour créer une variable il faut utiliser "$" + le nom de la variable. Attention rester constant sur le nommage.
$Variable = 'Une Variable';
// echo $variable . $Variable;   le . fait la concaténation ( à la suite et non +)
// echo $variable ." ". $Variable; echo $variable.' '.$Variable; :   les " " / ' ' ajoutent un espace entre les variables
// echo "$variable"; les "" affichent bien le contenu de la variabe
// echo '$variable'; à contrario des ''
// echo '$variable' . '$variable'; affichage = $variable$variable

// $camelCas = 'une variable en camel case';
// $snake_case = 'une variable en snake case';
// $kebab-case = 'une variable en kebab case'; (pas utiliser en PHP)
// $PascalCase = 'une variable en pascal case'

$nombre = 45;
$nombreDecimale = 10.5;
$booleen = false ;

// print_r($nombre);
// var_dump($nombre);
// var_dump($nombre);
// var_dump($nombreDecimale);
// var_dump($boolean);
// var_dump($variable);
// print_r($variable); 

// var_dump indique le type + le contenu de la variable alors que le "print_r" indique directement le contenu de la variable (s'utilse pour le de-buggage et non l'affichage) 


$fruit1 = 'pomme';
$fruit2 = 'banane';

// echo "$fruit1"."<br>"."$fruit2";  
// Soit on met les "" en debut et fin et la pas besoin de . entre chaque élément ou alors si on on met des "" entre chaque élément il faut bien les separer par des . 
// echo "<p>$fruit1 <br> $fruits2</p>";

// var_dump($fruit1);

// si on assigne 2 fois le meme element à 2 valeurs, l'element pris en compte est toujours le dernier 


require './footer.php'; ?>


<!-- ?> s'utilise seulement pour fermer les lignes de PHP pour les differencier de l'html -->