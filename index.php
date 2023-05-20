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
            case 'modifierLivrePage':
                modifierLivreAction();
                break;  
            case 'updateLivre':
                updateLivre();
                break;
            
//.. all about livre  
            case 'abonnePage': 
                listAbonneAction(); 
                break;  
            case 'ajouterAbonnee':
                ajouterAbonneAction();
                break; 
            case 'supprimerAbonnePage':
                supprimerAbonneAction();
                break;
            case 'destroyAbonne':
                destroyAbonne();
                break;
            case 'modifierAbonnePage':
                modifierAbonneAction();
                break;
            case 'modifierAbonne':
                modifierAbonnes();
                break;
            
            
// all about emprunt ...
            case 'empruntPage':
                listEmpruntAction() ;  
                break;   
            case 'ajouterEmprunt':
                ajouterEmpruntAction();
                break;
            case 'supprimerEmpruntPage':
                supprimerEmpruntAction();
                break; 
            case 'modifierEmpruntPage':
                modifierEmpruntAction();
                break; 
            case 'destroyEmprunt':
                destroyEmprunt();
                break;
            
           
            
        } 
    }



?>