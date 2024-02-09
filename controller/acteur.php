<?php

function liste() {

    require 'model/acteur.php';
    $acteurs = listeActeurs();
    require "view/acteur/liste.php";
}
function affiche($id){
    require "model/acteur.php";
    $a = getOneActeur($id);
    require "view/acteur/affiche.php";
}
function modifier1($id){
    require "model/acteur.php";
    $a = getOneActeur($id);
    require "view/acteur/modifier.php";
}
function modif(){
    require "model/acteur.php";
    
    modifActeur($_POST);
    
}
?>