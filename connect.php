<?php 
    include('conf.php');
    
    $bdd = mysqli_connect (DBHOST, DBUSER,DBPASSWD, DBNAME);
    if (mysqli_connect_error()){
        print('Erreur : ' . mysqli_connect_error());
        exit();
    }
    else {
        print ('Connextion à la base de données : OK !');
    }
    
    
    ?>