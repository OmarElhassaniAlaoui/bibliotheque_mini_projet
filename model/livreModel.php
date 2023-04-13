<?php 


function listLivre(){   
    include './connect.php';
    $stmt = $conn->query("SELECT * FROM livre") ; 
    $stmt->execute();
    $livres = $stmt->fetchAll(PDO::FETCH_OBJ); 
    return $livres;
} 
function ajouterLivre(){ 
    include './connect.php';
    $stmt = $conn->prepare("INSERT INTO livre (auteur,titre) VALUES (?,?)") ; 
    $stmt->execute(array($_POST['Auteur'],$_POST['Titre']));        
} 

function supprimerLivre(){
    include './connect.php';
    $stmt = $conn->prepare("DELETE FROM livre WHERE id_livre = ?") ; 
    $stmt->execute(array($_GET['id_livre']));        
}