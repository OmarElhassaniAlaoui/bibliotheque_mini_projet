<?php 
    require_once 'model/eumprintModel.php' ;
    function listEumprintAction(){
        $eumprints = listEumprint();
        require_once 'view/eumprint/list_eumprints.php' ;
    } ;


?>