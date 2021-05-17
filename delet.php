
<script>
<?php
//------------------------------------------------------------------------------
//  Consultation de la BD et affichage des enregistrements dans un tableau
//
$label = $_GET['libelle'] ;
$label =strip_tags($_POST['libelle']);
function  SupprimerBD ( $NomRecherche )
{
  $id = $_GET['id_t'] ;
  
  

  //--- Connection au SGBDR 
  include_once('connect.php');

  //--- Ouverture de la base de données
  

  
  
  // Delete FROM personne where nom='DUPONT' Limit 1;
  $sql = "DELETE From Type_de_livre Where id_t='". $id ."' Limit 1;" ;
  //--- Préparation de la requête
  $stmt = mysqli_prepare($db,$sql);
    
  //--- Exécution de la requête 
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);



  //--- Déconnection de la base de données
  header ('Location: index.php');
  
}
//------------------------------------------------------------------------------
//  Programme Principal
//
function Confirmation(){
if (  isset($_GET['id_t'])  )
{
  $id = $_GET['id_t'] ;

  if (  isset($id)  &&  ($id!='')  )
  {
    //--- Suppression ...
    SupprimerBD ( $id ) ;
    header ('Location: index.php');
  }

}
}
//------------------------------------------------------------------------------
?>
</script>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="jv.js"></script>
        <title>Oui</title>
    </head>
    <body>
    
    
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Supprimer un type</h1>
      <p>Etees vous sur de bouloir supprimer <?php print($label); ?>?</p>

      <div class="clearfix">
        <a class ="btn btn-info"   href="index.php" type="button" >Retour</a>
        <a class ="btn btn-danger" href="javascript:Confirmation()" >Supprimer</a>
      </div>
    </div>
  </form>

  
        
    </body>
    </html>
