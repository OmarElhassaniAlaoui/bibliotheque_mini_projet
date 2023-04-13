<?php 
    $title  = "Modefier Livre livres" ;  
    ob_start() ;
?>    

    <div class ="" > 
        <p>vous voulez modefier le livre : <?=$titre =$_GET['titre'] ?></p>
        <form action="index.php?action=livresPage" method="post"> 
            <div class="form-group">
                <label> </label>
                <input type="text" class="form-control" name="Auteur" placeholder="Auteur">
            </div>
            <div class="form-group">
                <label>Titre</label>
                <input  type="text" class="form-control" name="Titre" placeholder="titre">
            </div> 
            <div class="form-group">
                <input type="submit" class="btn btn-success my-2" value="Modefier" name="Modefier">
            </div>
        </form> 
    </div>

</div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



