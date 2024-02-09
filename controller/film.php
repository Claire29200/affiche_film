<?php

function liste() {

    require 'model/film.php';
    $films = listeFilms();
    require "view/film/liste.php";
}
function affiche($id){
    require "model/film.php";
    $f = getOneFilm($id);
    require "view/film/affiche.php";
}
?>