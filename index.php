<?php 
//On demarre une sesssion
session_start();
   

    // On se connecte à la base de données
    include_once('connect.php');
    //On exécute la reque^te SQL et on stocke le résultat dans un tableau associatif 

    
    $sql ='SELECT id_t, libelle FROM Type_de_livre;';
    $result = mysqli_query($db, $sql);
    //On ferme la connexion 
    include_once('close.php');
    

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Liste des Types des Livres</title>
</head>
<body>
<div class="container">
    <div class="row">
    <?php
    if (!empty($_SESSION['error'])){

    
    ?>
        <div class="alert alert-success" role="alert">
            <?php print ($_SESSION['error']);
            $_SESSION['error']="";?>
        </div> 
        <?php } ?>
    <?php
    if (!empty($_SESSION['message'])){

    
    ?>
        <div class="alert alert-success" role="alert">
            <?php print ($_SESSION['message']);
            $_SESSION['message']="";?>
        </div> 
        <?php } ?>
                <h1>Liste de types de Livres</h1>
                    <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>libellé</th>
                    </thead>
    
    
    <?php
    foreach($result as $type){?>
        <tr>
        <td><?php print($type['id_t']);    ?></td>
        <td><?php print($type['libelle']); ?></td>
        <td><a href="details.php?id_t=<?php print($type['id_t']);?>">Voir</a>
        </tr>
        <?php
        }
        ?>

    </table>
    <a href="ajouter.php"> ajouter un type </a>
    </div>
</div>
    
    
</body>
</html>