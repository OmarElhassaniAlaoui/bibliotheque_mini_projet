<?php 
 require_once 'model/abonneModel.php' ; 
 function  listAbonneAction () { 
     $abonnes = listAbonne(); 
     require_once 'view/abonne/list_abonne.php' ; 
 } 
 function ajouterAbonneAction(){
     ajouterAbonne();
     header('Location:index.php?action=abonnePage');
 };

 



?>