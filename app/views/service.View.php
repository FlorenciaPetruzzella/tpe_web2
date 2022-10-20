<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ServiceView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showServices($allServices){
        $this->smarty->assign('allServices', $allServices); 

        $this->smarty->display('serviceList.tpl');
    }

    public function showServicesById($services, $auto, $id) {
        $this->smarty->assign('count', count($services)); 
        $this->smarty->assign('services', $services);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('auto', $auto);
        
        $this->smarty->display('serviceListById.tpl');
    }

    public function showService($service, $auto, $id){
        $this->smarty->assign('service', $service); 
        $this->smarty->assign('id', $id);
        $this->smarty->assign('auto', $auto);

        $this->smarty->display('serviceDetail.tpl');
    }

    public function editService($service){
        $this->smarty->assign('service', $service);

        $this->smarty->display('form_edit_service.tpl');
    }
}
?>