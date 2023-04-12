<?php 


function listLivre(){   
    include './connect.php';
    $stmt = $conn->query("SELECT * FROM livre") ; 
    $stmt->execute();
    $livres = $stmt->fetchAll(PDO::FETCH_OBJ); 
    return $livres;
}