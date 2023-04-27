<?php 
    require_once 'model/livreModel.php' ;
    // rkatrje3 la vue dyal la liste dyal les livres    
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
    // had l function li kat-siftna l'apage dyal supprission livre
    function supprimerLivreAction(){    
        $id = $_GET['id_livre'];
        require_once 'view/livre/supprimer_livre.php' ;  
    } ; 
    /*had l function li ltahet hiya lli kat-supprimer livre  */
    function destroyLivre(){      
        supprimerLivre();
        header('Location:index.php?action=livresPage');
    } ; 
    function updateLivre(){
        modefierLivre();
        header('Location:index.php?action=livresPage');
    } ;

    
?> 

