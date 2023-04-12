<?php 
    require_once 'model/livreModel.php' ;
    
    function livresAction(){ 
        $livres = listLivre();
        require_once 'view/livre/list_livres.php' ;
    } ;
    
    function creeLivreAction(){
        require_once 'view/livre/cree_livre.php' ;
    } ;     
    
    function modefierLivreAction(){

    } ;
    function supprimerLivreAction(){

    } ;
    
?> 

