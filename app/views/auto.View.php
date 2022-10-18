<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AutoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    public function showAutos($autos) {
        $this->smarty->assign('count', count($autos)); 
        $this->smarty->assign('autos', $autos);

        $this->smarty->display('autosList.tpl');
    }

    public function deleteAuto($id){
        $this->smarty->assign('id', $id);
                
        $this->smarty->display('deleteAuto.tpl');
    }

    public function editAuto($auto){
        $this->smarty->assign('auto', $auto);

        $this->smarty->display('form_edit_auto.tpl');
    }
}
?>