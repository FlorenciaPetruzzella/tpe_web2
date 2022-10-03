<?php
require_once './app/controllers/auto.Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$autoController = new AutoController();


switch ($params[0]) {
    case 'list':
        $autoController->showAutos();
        break;
    /*case 'add':
        $taskController->addTask();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $taskController->deleteTask($id);
        break;
    case "finalize":  // finalize/:ID
        $id = $params[1];
        $taskController->finalizeTask($id);
        break;
    default:
        echo('404 Page not found');
        break;
    */
}
