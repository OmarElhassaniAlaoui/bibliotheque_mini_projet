<?php 
 require_once 'model/abonneModel.php' ; 
 function listAbonneAction () { 
     $abonnes = listAbonne(); 
     require_once 'view/abonne/list_abonne.php' ; 
 } 
 function ajouterAbonneAction(){
     ajouterAbonne();
     header('Location:index.php?action=abonnePage');
 }; 
    function supprimerAbonneAction(){  
        require_once 'view/abonne/supprimer_abonne.php';
    };
    function destroyAbonne(){
        $id = $_GET['id_abonne'];
        supprimerAbonne($id);
        header('Location:index.php?action=abonnePage');
    };
    function modifierAbonneAction(){
        $id = $_GET['id_abonne'];
        $abonnes = viewAbonne($id);
        require_once 'view/abonne/modifier_abonne.php';
    };
    function modifierAbonnes(){
        $id = $_POST['id_abonne'];
        $prenom = $_POST['prenom']; 
        var_dump($_POST); 
        modifierAbonne($prenom,$id);
        header('Location:index.php?action=abonnePage');
    };


?>