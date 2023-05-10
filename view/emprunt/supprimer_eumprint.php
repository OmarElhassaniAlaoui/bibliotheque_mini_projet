<?php 
    $title  = "supprimer un emprunt" ; 
    ob_start() ; 

?>   

 <div class="container mt-2">
    <p>voulez vous vraiment supprimer l'emprunt <?=$id=$_GET['id_emprunt']?> ?</p> 
    <a class="btn btn-danger" href="index.php?action=destroyEmprunt&id_emprunt=<?=$id=$_GET['id_emprunt']?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=empruntPage">Annuler la suppression</a>
 </div>

<?php $content = ob_get_clean() ?>      
<?php include_once 'view/layout.php' ?> 



