<?php
$dsn = "mysql:host=localhost;dbname=bibliotheque"; 
$user = "root" ;
$pass = "" ; 

$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // FOR Arabic
);

try{
    $conn = new PDO($dsn , $user , $pass , $option ); 
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo $e->getMessage() ; //! -> kandiroha blast . f java par expl   
}



