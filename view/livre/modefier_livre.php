<?php 
    $title  = "Modefier Livre livres" ;  
    ob_start() ;
?>    
    <div class =""> 
        <p> Modefier le livre :<?=$livres->titre?> de <?=$livres->auteur?></p>
        
        <form action="index.php?action=updateLivre" method="post">  
            <input type="hidden" name="id_livre" value="<?=$livres->id_livre?>">
            <div class="form-group">
                <label>Auteur</label>
                <input type="text" class="form-control" name="Auteur" placeholder="<?=$livres->auteur?>" value="<?=$livres->auteur?>">
            </div>
            <div class="form-group">
                <label>Titre</label>
                <input  type="text" class="form-control" name="Titre" placeholder="<?=$livres->titre?>" value="<?=$livres->titre?>">
            </div> 
            <div class="form-group">
                <input type="submit" class="btn btn-success my-2" value="Modefier" name="Modefier">
            </div>
        </form> 
    </div>

</div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



