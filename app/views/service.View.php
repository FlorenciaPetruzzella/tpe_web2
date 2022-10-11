<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ServiceView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showServices($services) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($services)); 
        $this->smarty->assign('services', $services);

        // mostrar el tpl
        $this->smarty->display('serviceList.tpl');
    }

    function editService($service){
        $this->smarty->assign('service', $service);

        $this->smarty->display('form_edit_service.tpl');
    }
}
?>