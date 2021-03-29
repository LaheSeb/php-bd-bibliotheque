<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $bdd = mysqli_connect ('mysql-seblah.alwaysdata.net', 'seblah_cdi','Bibliotheque50*', 'seblah_bibliotheque');
    $resultat = mysqli_query($bdd, 'Select * From Type_de_livre;');
    echo ' Il y a '. mysqli_num_rows($resultat). 'entrée dans la base de donnée <br>';
    while ($donnees = mysqli_fetch_assoc($resultat)){
        echo $donnees ['id_t'].'' .$donnees ['libelle'].'</br>';
    }
    ?>
</body>
</html>