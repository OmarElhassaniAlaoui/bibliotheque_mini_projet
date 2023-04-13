<?php 
    $title  = "supprimer un livres" ;  
    ob_start() ;
?>   
 <div class="container mt-2">
    
    <p>voulez vous vraiment supprimer le livre <?=$id=$_GET['id_livre'] ?> ?</p> 
    <a class="btn btn-danger" href="index.php?action=supprimerLivrePage&id_livre=<?=$id=$_GET['id_livre']?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=livresPage">Annuler la suppression</a>


 </div>
<?php $content = ob_get_clean() ?>      
<?php include_once 'view/layout.php' ?> 



