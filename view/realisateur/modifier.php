<?php

$id = $_POST['id'];

require './connect.php';
require 'f_modif.php';

$stmt = $pdo->prepare("SELECT * FROM realisateur WHERE id= ? ");
$stmt->execute([$id]);
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();

?>

<form action="updatep.php" method="POST">
    <input  type="text" name="nom" value =<?= $row['nom'] ?> /> 
    <input  type="text" name="prenom" value =<?= $row['prenom'] ?> /> 
    <input  type="text" name="photo" value =<?= $row['photo'] ?> />   
    <input type="hidden" name="id" value=<?= $row['id'] ?> />
    <input type="submit" value="modifier" />
</form>

<?php
}
?>