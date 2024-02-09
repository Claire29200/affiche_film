<?php


function listeRealisateurs(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from realisateur");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;

}

function getOneRealisateur($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from realisateur WHERE id= ? ");
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row;

};

?>
