<?php 
    $title  = "Liste des Abonnés";  
    ob_start() ;
?>    
<table class="table table-striped"> 
        <thead> 
            <Tr>
                <th>id_Abonnee</th>
                <th>prenom</th>
                <th>modefication</th>
                <th>suppression</th>
            </Tr>
        </thead> 
        <tbody> 
            <?php foreach($abonnes as $abonne): ?>
                <tr>
                    <td><?= $abonne->id_abonne ?></td>
                    <td><?= $abonne->prenom?></td>
                    <td><a href="#" class ="btn btn-primary" > modefier </a></td>
                    <td><a href="#" class = "btn btn-danger" > supprimer </a></td>
                </tr>
            <?php endforeach;  ?>
           
        </tbody>
    </table> 
    <div class ="" > 
    <form action="index.php?action=ajouterAbonnee" method="post"> 
        <div class="form-group">
            <label>Prenom </label>
            <input type="text" class="form-control" name="prenom" placeholder="prenom">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>
    </form> 
    </div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



