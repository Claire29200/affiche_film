<?php


function listeFilms(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from films");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
};

function getOneFilm($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from films WHERE id_film= ? ");
    $sql->execute([$id]);
    $rows = $sql->fetch(PDO::FETCH_ASSOC);
    return $rows;

};

?>