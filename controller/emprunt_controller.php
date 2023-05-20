<?php 
    require_once 'model/empruntModel.php' ;
    // afficher la liste des emprunts
    function listEmpruntAction(){
        $eumprints = listEumprint();
        $abonnes = listAbonne();
        $livres = listLivre();
        require_once 'view/emprunt/list_emprunts.php' ;
    } ;  
    // ajouter un emprunt 
    function ajouterEmpruntAction(){  
        $id_livre = $_POST['id_livre'];
        $id_abonne = $_POST['id_abonne'];
        $date_sortie = $_POST['date_sortie'];
        $date_rendu = $_POST['date_rendu'];
        ajouterEmprunt($id_livre,$id_abonne,$date_sortie,$date_rendu); 
        header('Location:index.php?action=empruntPage');
    } ;
    // afficher la page de supprimer emprunt 
    function supprimerEmpruntAction(){
        $id = $_GET['id_emprunt'];
        require_once 'view/emprunt/supprimer_eumprint.php' ;
    } ; 
    function modifierEmpruntAction(){ 
        require_once 'view/emprunt/modifier_emprunt.php' ;
    } ;
    // supprimer emprunt 
    function destroyEmprunt(){
        supprimerEmprunt();
        header('Location:index.php?action=empruntPage'); 
    } 
    // modifier emprunt 
    // function modifierEmpruntAction(){
    //     $id = $_GET['id_emprunt'];
    //     $eumprints = viewEmprunt($id);
    //     require_once 'view/emprunt/modifier_emprunt.php' ;
    // } ;
    // update emprunt 
    // function updateEmprunt(){
    //     modifierEmprunt();
    //     header('Location:index.php?action=empruntPage');
    // } ;
        
   




?>