<?php 
    require_once "../app/config/config.php";
    require_once APP_ROOT. '/app/lib/DBConnection.php';

    $controller = isset($_GET['controller']) ? $_GET['controller']: null;
    $action = isset($_GET['action']) ? $_GET['action'] : null;

    switch($controller){
        case 'patient':
            require_once('../app/controllers/PatientController.php');
            $patientController = new PatientController();
            switch($action){
                case  'list':
                    $patientController->index();
                    break;
                case 'add':
                    $patientController->add();
                    break;
                // case 'delete':
                //     $studentController->delete();
            }
            break;
        case 'doctor':
            require_once('../app/controllers/DoctorController.php');
            $doctorController = new DoctorController();
            switch($action){
                case 'list':
                    $doctorController->index();
                    break;
                case 'add':
                    $doctorController->add();
                    break;
                case 'delete':
                    $doctorController->delete();
                    break;
                case 'edit':
                    $doctorController->edit();
                    break;
                
            }
            break;
    }
?>