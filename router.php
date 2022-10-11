<?php
require_once './app/controllers/auto.Controller.php';
require_once './app/controllers/service.Controller.php';
require_once './app/controllers/auth.Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch ($params[0]) {
    case 'home':
        $autoController = new AutoController();
        $autoController->showHome();
        break;
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;    
    case 'list':
        $autoController = new AutoController();
        $autoController->showAutos();
        break;
    case 'add':   
        $autoController = new AutoController();            
        $autoController->addAuto();
        break;
    case 'addService':
        $serviceController = new ServiceController();
        $id = $params[1];
        $serviceController->addService($id);
        break;
    case 'delete':     
        $autoController = new AutoController();       
        $id = $params[1];
        $autoController->deleteAuto($id);
        break;
    case 'deleteService': 
        $serviceController = new ServiceController();           
        $id = $params[1];
        $serviceController->deleteService($id);
        break;
    case 'editAuto':  
        $autoController = new AutoController();        
        $id = $params[1];
        $autoController->editAuto($id);
        break;
    case 'editService':  
        $serviceController = new ServiceController();        
        $id = $params[1];
        $serviceController->editService($id);
        break;
    case 'updateAuto':   
        $autoController = new AutoController();          
        $id = $params[1];
        $autoController->updateAuto($id);
        break;
    case 'updateService':   
        $serviceController = new ServiceController();          
        $id = $params[1];
        $serviceController->updateService($id);
        break;
    case 'showServices':  
        $serviceController = new ServiceController();      
        $id = $params[1];
        $serviceController->showServices($id);
        break;
    default:
        echo('404 Page not found');
        break;
}

?>