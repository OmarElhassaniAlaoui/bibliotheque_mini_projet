<?php 
function listAbonne(){
    include './connect.php';
    $stmt = $conn->query("SELECT * FROM abonne") ; 
    $stmt->execute();
    $abonnes = $stmt->fetchAll(PDO::FETCH_OBJ); 
    return $abonnes;
} 
function ajouterAbonne(){
    include './connect.php';
    $stmt = $conn->prepare("INSERT INTO abonne (prenom) VALUES (?)") ; 
    $stmt->execute(array($_POST['prenom']));        
}


?>