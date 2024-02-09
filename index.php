


<?php

//dans l'url je tape http://localhost/ecole/index.php?route=acteur/liste
// ou
// http://localhost/ecole/index.php?route=acteur/affiche/1
$route = $_GET['route'] ;
// donc ici j'ai dans $route la chaine "acteur/liste"

$tab = explode('/',$route);
$controller = $tab[0]; // dans $controller j'ai acteur
$action = $tab[1];
$arg=NULL; //dans $action j'ai "liste"
if (isset($tab[2])){
    $arg=$tab[2]; // dans $
}

require "controller/".$controller.".php";

if(isset($arg)){
    $action($arg);
} else {
    $action();
}; // avec les (), j'exécute la fonction dont le nom est dans action
           // ici en l'occurence, liste ()

?>

