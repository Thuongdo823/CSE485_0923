<?php
require_once APP_ROOT . '/app/services/DoctorService.php'; 
    class DoctorController{
        public function index(){
            $doctorService = new DoctorService();
            $doctors = $doctorService->getAllDoctors();
          
            include APP_ROOT. '/app/views/doctor/index.php';
        }
        public function add(){
            include APP_ROOT. '/app/views/doctor/add.php';

            if(isset($_POST['doctorName']) && $_POST['specialist']){
                $doctorname = $_POST['doctorName'];
                $specialist = $_POST['specialist'];
                $doctorservice = new DoctorService();
                $doctorservice->addDoctor($doctorname, $specialist);
                header('location:' .DOMAIN. '/public/index.php?controller=doctor&action=list');
            }
        }

        public function delete(){
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                $doctorService = new DoctorService();
                $doctorService->deleteDoctor($id);
                header('location:' .DOMAIN . '/public/index.php?controller=doctor&action=list'); 
            }
        }
        
        public function  edit(){
            if(isset($_POST['doctorName']) && isset($_POST['specialist'])){
                $id = $_POST['id'];
                $doctorName = $_POST['doctorName'];
                $specialist = $_POST['specialist'];
                $doctorService = new DoctorService();
                $doctorService->editDoctor($id, $doctorName, $specialist);
                header('location:' .DOMAIN . '/public/index.php?controller=doctor&action=list');
            }
            else{
                echo "Thiếu dữ liệu";
            }
        }
    
    }
?>