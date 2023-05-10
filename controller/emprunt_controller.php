<?php 
    require_once 'model/empruntModel.php' ;
    // afficher la liste des emprunts
    function listEmpruntAction(){
        $eumprints = listEumprint();
        require_once 'view/emprunt/list_emprunts.php' ;
    } ; 
    // afficher la page de supprimer emprunt 
    function supprimerEmpruntAction(){
        $id = $_GET['id_emprunt'];
        require_once 'view/emprunt/supprimer_eumprint.php' ;
    } ;
    // supprimer emprunt 
    function destroyEmprunt(){
        supprimerEmprunt();
        header('Location:index.php?action=empruntPage'); 
    } 
    
    // update emprunt 
    // function updateEmprunt(){
    //     modefierEmprunt();
    //     header('Location:index.php?action=empruntPage');
    // } ;
        

   




?>