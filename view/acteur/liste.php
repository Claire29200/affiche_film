<?php
require "view/header.php";

foreach ($acteurs as $a) { ?>
<a href="affiche/<?= $a['id'] ?>"><h1><?= $a['prenom'] ?> <?= $a['nom'] ?><br><img src=<?=$a['photo']?> width= 200> </h1></a>
<button><a href="../acteur/modifier1/<?= $a['id'] ?>">modifier</a></button>
 <?php } 

 require "view/footer.php";?>

 