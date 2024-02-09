<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

<?php
require "view/header.php";

foreach ($films as $f) { ?>
<a href="affiche/<?= $f['id_film'] ?>"><h1><?= $f['nom'] ?></a></h1><br><h3> <img src=<?= $f['affiche']?> width= 200><br> </h3>

 <?php } 

 require "view/footer.php";?>



</body>
</html>