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

function supprimerAbonne($id){
    include './connect.php';
    $stmt = $conn->prepare("DELETE FROM abonne WHERE id_abonne = ?") ; 
    return $stmt->execute(array($id));        
}

function modefierAbonne($prenom,$id_abonne){ 
    include './connect.php'; 
    $stmt = $conn->prepare("UPDATE abonne SET prenom = ? WHERE id_abonne = ?") ; 
    return $stmt->execute([$prenom,$id_abonne]);   
} 
function viewAbonne($id)
{
    include './connect.php';
    $sqlState = $conn->prepare("SELECT * FROM abonne WHERE id_abonne = ?");
    $sqlState->execute(array($id));
    return $sqlState->fetch(PDO::FETCH_OBJ);

}  


?>