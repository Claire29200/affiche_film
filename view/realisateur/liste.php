<?php
require "view/header.php";

foreach ($realisateurs as $r) { ?>
    <a href="affiche/<?= $r['id'] ?>"> <h1><?= $r['prenom'] ?> <?= $r['nom'] ?></a><br><img src=<?= $r['photo']?> width= 200></h1>
    
<?php }
require "view/footer.php";?>
