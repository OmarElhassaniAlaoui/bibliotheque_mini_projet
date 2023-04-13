<?php 



    function listEumprint(){
        include './connect.php';
        $stmt = $conn->query("SELECT * FROM emprunt") ; 
        $stmt->execute();
        $eumprints = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $eumprints;
    }