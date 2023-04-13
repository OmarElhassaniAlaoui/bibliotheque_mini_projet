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
        require_once 'view/livre/modefier_livre.php' ;
    } ;
    function supprimerLivreAction(){ 
        require_once 'view/livre/supprimer_livre.php' ; 
        if(isset($_GET['action']) && $_GET['action'] =='supprimerLivrePage'){
            destroyLivre(); 
            // header('Location:index.php?action=supprimerLivrePage');
        }

        
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

