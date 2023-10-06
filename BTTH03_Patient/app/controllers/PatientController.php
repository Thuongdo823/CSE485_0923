<?php 
require_once APP_ROOT. '/app/services/PatientService.php';

class PatientController{
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
      
       include APP_ROOT. '/app/views/patient/index.php';
    }

    public function add(){
        include APP_ROOT. '/app/views/patient/add.php';
    }

    
    

} 
?>