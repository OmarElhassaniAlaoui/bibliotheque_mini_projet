<?php  
    require_once 'controller/livre_controller.php' ;
    require_once 'controller/abonne_controller.php' ;
    require_once 'controller/emprunt_controller.php' ;   
    if(isset($_GET['action'])){ 
        $action = $_GET['action']; 
        switch ($action) { 
            case 'livresPage': 
                livresAction(); 
                break; 
            case 'ajouterLivre': 
                 ajouterLivreAction(); 
                break; 
            case 'supprimerLivrePage':
                supprimerLivreAction();
                break;
            case 'destroyLivre':
                destroyLivre();
                break; 
            case 'modefierLivrePage':
                modefierLivreAction();
                break; 
//.. all about livre  
            case 'abonnePage': 
                listAbonneAction(); 
                break;  
            case 'ajouterAbonnee':
                ajouterAbonneAction();
                break; 
// all about emprunt ...
            case 'empruntPage':
                listEmpruntAction() ;  
                break;   
            case 'ajouterEmpruntPage':
                // ajouterEmpruntAction();
                break;
            case 'supprimerEmpruntPage':
                supprimerEmpruntAction();
                break; 
            case 'modefierEmpruntPage':
                // modefierEmpruntAction();
                break; 
            case 'destroyEmprunt':
                destroyEmprunt();
                break;
            
            
            
            
           
            
        } 
    }



?>