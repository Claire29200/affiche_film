


<form action="../modif" method="POST">
    <input  type="text" name="nom" value =<?= $a['nom'] ?> /> 
    <input  type="text" name="prenom" value =<?= $a['prenom'] ?> /> 
    <input  type="text" name="photo" value =<?= $a['photo'] ?> />   
    <input type="hidden" name="id" value=<?= $a['id'] ?> />
    <input type="submit" value="modifier" />
</form>

