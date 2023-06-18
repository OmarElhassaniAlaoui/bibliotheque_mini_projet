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
    function supprimerEmprunt($id_emprunt){
        include './connect.php';
        $stmt = $conn->prepare("DELETE FROM emprunt WHERE id_emprunt = ?") ;
        return $stmt->execute(
           [$id_emprunt]   
        );
    } 
    // ajouter un emprunt 
    function ajouterEmprunt($id_livre,$id_abonne,$date_sortie,$date_rendu){
        include './connect.php';
        $stmt = $conn->prepare("INSERT INTO emprunt(id_livre,id_abonne,date_sortie,date_rendu) VALUES (?,?,?,?)") ; 
        return $stmt->execute([$id_livre,$id_abonne,$date_sortie,$date_rendu]);        
    } 
    // modifier un emprunt
    function modifierEmprunt($id_emprunt,$id_livre,$id_abonne,$date_sortie,$date_rendu){
        include './connect.php';
        $stmt = $conn->prepare("UPDATE emprunt SET id_livre = ?,id_abonne = ?,date_sortie = ?,date_rendu = ? WHERE id_emprunt = ?") ; 
        return $stmt->execute([$id_livre,$id_abonne,$date_sortie,$date_rendu,$id_emprunt]);        
    }
    
    // afficher un emprunt
    function viewEmprunt($id_emprunt){
        include './connect.php';
        $stmt = $conn->prepare("SELECT * FROM emprunt WHERE id_emprunt = ?") ; 
        $stmt->execute([$id_emprunt]);
        $sqlStmt = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $sqlStmt; 
        
    }
