<?php 
    $title  = "Modifier emprunt" ;  
    ob_start() ;
?>    
    
    <h3>vous voulez modefier l'emprunt : <?= $id_emprunt = $_GET['id_emprunt']?></h3>
    <form action="index.php?action=updateEmprunt" method="post"> 
        <?php 
           include './connect.php'; 
            $stmt = $conn->prepare("SELECT * FROM emprunt WHERE id_emprunt = ?") ; 
            $stmt->execute([$id_emprunt]);
            $sqlStmt = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach($sqlStmt as $row){
                $id_emprunt = $row->id_emprunt;
                $id_livre = $row->id_livre;
                $id_abonne = $row->id_abonne;
                $date_sortie = $row->date_sortie;
                $date_rendu = $row->date_rendu;
            }    
        ?>
        <!-- input type hidden -->
        <input type="hidden" name="id_emprunt" value="<?=$id_emprunt?>">
        
     <div class ="container ">
            <label>Abonnee </label>
              <select name="id_abonne" class="form-select" aria-label="Default">  
                <?php 
                    $stmt = $conn->prepare("SELECT * FROM abonne") ; 
                    $stmt->execute();
                    $sqlStmt = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach($sqlStmt as $row){
                        $id_abonne = $row->id_abonne;
                        $nom = $row->nom;
                        $prenom = $row->prenom;
                        echo "<option value='$id_abonne'>$nom $prenom</option>";
                    }
                   
                ?>               
              </select>        
        </div>

        <div class ="container-list-livre ">
            <label>Livre</label>
              <select name="id_livre" class="form-select" aria-label="Default">  
                <?php
                    $stmt = $conn->prepare("SELECT * FROM livre") ; 
                    $stmt->execute();
                    $sqlStmt = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach($sqlStmt as $row){
                        $id_livre = $row->id_livre;
                        $titre = $row->titre;
                        echo "<option value='$id_livre'>$titre</option>";
                    }
                ?>               
              </select>        
        </div>

        <div class="form-group">
            <label>Date Sortie </label>
            <input type="date" class="form-control" name="date_sortie" value="<?=$row->$date_sortie?>" >
        </div>
        <div class="form-group">
            <label>Date Rendu </label>
            <input  type="date" class="form-control" name="date_rendu" value="<?=$row->$date_rendu?>" >
        </div> 
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Modifier" name="Modifier">
        </div>
       
    </form> 
   

</div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



