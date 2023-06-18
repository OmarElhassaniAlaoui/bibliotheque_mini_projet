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
    
   
    function modifierLivreAction(){  
        $id = $_GET['id_livre'];
        $livres = view($id);
        require_once 'view/livre/modifier_livre.php' ;
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
        $id_livre = $_POST['id_livre'];
        $auteur = $_POST['Auteur'];
        $titre = $_POST['Titre'];
        modifierLivre($auteur,$titre,$id_livre);
        header('Location:index.php?action=livresPage');
    };
    

    
?> 

