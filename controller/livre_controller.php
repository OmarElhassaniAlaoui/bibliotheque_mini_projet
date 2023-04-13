<?php 
    require_once 'model/livreModel.php' ;
    
    function livresAction(){ 
        $livres = listLivre();
        require_once 'view/livre/list_livres.php' ;
    } ;
    
    function ajouterLivreAction(){
        ajouterLivre();
        header('Location:index.php?action=livresPage');
    } ;     
    
    function modefierLivreAction(){  
        // $auteur = $_GET['auteur'];
        require_once 'view/livre/modefier_livre.php' ;
    } ;
    function supprimerLivreAction(){    
        $id = $_GET['id_livre'];
        require_once 'view/livre/supprimer_livre.php' ;  
    } ; 
    function destroyLivre(){      
        supprimerLivre();
        header('Location:index.php?action=livresPage');
    } ; 
    function updateLivre(){
        modefierLivre();
        header('Location:index.php?action=livresPage');
    } ;

    
?> 

