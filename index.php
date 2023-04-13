<?php  
    require_once 'controller/livre_controller.php' ;
    require_once 'controller/abonne_controller.php' ;
    require_once 'controller/emprunt_controller.php' ; 
    // livresAction();  
    if(isset($_GET['action'])){ 
        $action = $_GET['action']; 
        switch ($action) { 
            case 'livresPage': 
                livresAction(); 
                break; 
            case 'abonnePage': 
                listAbonneAction(); 
                break; 
            case 'empruntPage':
                listEmpruntAction() ;  
                break; 
        } 
        if(isset($_GET['action']) && $_GET['action'] =='ajouterLivre'){
            ajouterLivreAction();
        }
        
        if(isset($_GET['action']) && $_GET['action'] =='supprimerLivrePage'){
            supprimerLivreAction();
        }
        
        if(isset($_GET['action']) && $_GET['action'] =='ajouterAbonnee'){
            ajouterAbonneAction();
        }
        if(isset($_GET['action']) && $_GET['action'] =='modefierLivrePage'){
            modefierLivreAction();
        } 


    }



?>