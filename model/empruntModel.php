<?php 

   
    // afficher la liste des emprunt 
    function listEumprint(){
        include './connect.php';
        $stmt = $conn->query("SELECT * FROM emprunt") ; 
        $stmt->execute();
        $eumprints = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $eumprints;
    }
    // supprimer un emprunt de la base de donnes 
    function supprimerEmprunt(){
        include './connect.php';
        $stmt = $conn->query("DELETE FROM emprunt WHERE id_emprunt = ?") ;
        return $stmt->execute(array($_GET['id_emprunt']));
    } 
    // ajouter un emprunt 
    function ajouterEmprunt($id_livre,$id_abonne,$date_sortie,$date_rendu){
        include './connect.php';
        $stmt = $conn->prepare("INSERT INTO emprunt(id_livre,id_abonne,date_sortie,date_rendu) VALUES (?,?,?,?)") ; 
        return $stmt->execute([$id_livre,$id_abonne,$date_sortie,$date_rendu]);        
    } 
    