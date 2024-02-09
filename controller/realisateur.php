<?php

function liste() {

    require 'model/realisateur.php';
    $realisateurs = listeRealisateurs();
    require "view/realisateur/liste.php";
}

function affiche($id){
    require "model/realisateur.php";
    $r = getOneRealisateur($id);
    require "view/realisateur/affiche.php";
}

?>