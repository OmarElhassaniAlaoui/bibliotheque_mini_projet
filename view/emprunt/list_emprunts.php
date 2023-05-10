<?php 
    $title  = "liste des Emprunts" ;  
    ob_start() ;
?>    
 <table class="table table-striped"> 
        <thead> 
            <Tr>
                <th>id_emprunt</th>
                <th>id_livre</th>
                <th>id_abonne</th>
                <th>date_sortie	</th>
                <th>date_rendu</th>
                <th>modefication</th>
                <th>suppression</th>
            </Tr>
        </thead> 
        <tbody> 
            <?php foreach($eumprints as $eumprint): ?>
                <tr>
                    <td><?= $eumprint->id_emprunt ?></td>
                    <td><?= $eumprint->id_livre?></td>
                    <td><?= $eumprint->id_abonne?></td>
                    <td><?= $eumprint->date_sortie?></td>
                    <td><?= $eumprint->date_rendu?></td>
                    <td><a href="index.php?action= " class ="btn btn-primary" > modefier </a></td>
                    <td><a href="index.php?action=supprimerEmpruntPage&id_emprunt=<?=$eumprint->id_emprunt?>" class = "btn btn-danger" > supprimer </a></td>
                </tr>
            <?php endforeach;  ?>
           
        </tbody>
    </table> 

    <div class ="" > 
    <form action="" method="post"> 
        <div class ="container ">
            <label>Abonnee </label>
              <select class="form-select" aria-label="Default">  
                <?php
                   require_once 'controller/abonne_controller.php' ;
                     $abonnes = listAbonne();
                    foreach($abonnes as $abonne) {
                        echo "<option value='$abonne->id_abonne'>$abonne->id_abonne-$abonne->prenom</option>";
                    }
                ?>               
              </select>        
        </div>
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



