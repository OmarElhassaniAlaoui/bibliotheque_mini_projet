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
            case 'abonnePage': 
                listAbonneAction(); 
                break; 
            case 'empruntPage':
                listEmpruntAction() ;  
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
            case 'ajouterAbonnee':
                ajouterAbonneAction();
                break;
            case 'modefierLivrePage':
                modefierLivreAction();
                break; 
            
        } 
    }



?>