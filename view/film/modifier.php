<?php

$id = $_POST['id'];

require './connect.php';
require 'f_modif.php';

$stmt = $pdo->prepare("SELECT * FROM films WHERE id= ? ");
$stmt->execute([$id]);
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();

?>

<form action="updatep.php" method="POST">
    <input  type="text" name="nom" value =<?= $row['nom'] ?> /> 
    <input  type="text" name="date_de_sortie" value =<?= $row['date_de_sortie'] ?> /> 
    <input  type="text" name="affiche" value =<?= $row['affiche'] ?> />   
    <input type="hidden" name="id_film" value=<?= $row['id_film'] ?> />
    <input type="submit" value="modifier" />
</form>

<?php
}
?>