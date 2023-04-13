<?php 
    $title  = "liste des livres" ;  
    ob_start() ;
?>    
 <table class="table table-striped"> 
        <thead> 
            <Tr>
                <th>id_livre</th>
                <th>autheur</th>
                <th>titre</th>
                <th>modefication</th>
                <th>suppression</th>
            </Tr>
        </thead> 
        <tbody> 
            <?php foreach($livres as $livre): ?>
                <tr>
                    <td><?= $livre->id_livre?></td>
                    <td><?= $livre->auteur?></td>
                    <td><?= $livre->titre?></td>
                    <td><a href="index.php?action=modefierLivrePage" class ="btn btn-primary" > modefier </a></td>
                    <td><a href="index.php?action=supprimerLivrePage&id_livre=<?=$livre->id_livre?>" class = "btn btn-danger" > supprimer </a></td>
                </tr>
            <?php endforeach;  ?>   
        </tbody>
    </table> 

    <div class ="" > 
    <form action="index.php?action=ajouterLivre" method="post"> 
        <div class="form-group">
            <label>Auteur </label>
            <input type="text" class="form-control" name="Auteur" placeholder="Auteur">
        </div>
        <div class="form-group">
            <label>Titre</label>
            <input  type="text" class="form-control" name="Titre" placeholder="titre">
        </div> 
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>
    </form> 
    </div>

</div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



