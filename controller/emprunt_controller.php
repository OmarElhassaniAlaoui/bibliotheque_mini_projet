<?php 
    require_once 'model/empruntModel.php' ;
    function listEmpruntAction(){
        $eumprints = listEumprint();
        require_once 'view/emprunt/list_emprunts.php' ;
    } ;


?>