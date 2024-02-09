<?php


function listeActeurs(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from acteurs");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
};

function getOneActeur($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * from acteurs WHERE id= ? ");
    $sql->execute([$id]);
    $rows = $sql->fetch(PDO::FETCH_ASSOC);
    return $rows;

}
function modifActeur($a){
    require "connect.php";
    $stmt = $pdo->prepare("UPDATE acteurs SET nom = ?, prenom=? , photo = ? WHERE `id` = ?");
    $stmt->execute([$a['nom'],$a['prenom'],$a['photo'],$a['id']]);
}


?>