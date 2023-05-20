<?php 
    $title  = "supprimer Abonne" ;  
    $id_abonne =$_GET['id_abonne'];
    ob_start() ;   
?>   
 <div class="container mt-2"> 
    <p>voulez vous vraiment supprimer le abonne <?=$id_abonne?> ?</p> 
    <a class="btn btn-danger" href="index.php?action=destroyAbonne&id_abonne=<?=$id_abonne?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=abonnePage">Annuler la suppression</a>
 </div>
<?php $content = ob_get_clean() ?>      
<?php include_once 'view/layout.php' ?> 
