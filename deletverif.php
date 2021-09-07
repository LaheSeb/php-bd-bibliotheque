
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
    
  }

}
}
//------------------------------------------------------------------------------
?>
</script>