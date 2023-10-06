<?php 
require_once APP_ROOT. '/app/models/Patients.php';
require_once APP_ROOT. '/app/lib/DBConnection.php';
// lớp thực huện câu truy vấn select insert ...
class PatientService{
    public function getAllPatients(){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM patients";
                $stmt = $conn->query($sql);
                $result = $stmt->fetchAll();
                $patients = array();
                foreach ($result as $row){
                    $patient = new Patients($row[0], $row[1], $row[2], $row[3], $row[4]);
                    $patients[] = $patient;
                }
                return $patients;
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function getPatientById($id){
        $patients = $this->getAllPatients();
        foreach($patients as $each){
            if($each->getIdP() == $id)
                return $each;
        }
    }
    public function getDoctorNameByPatient($std){ // lấy ra tên bacsi  trong bang doctors
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();

            if($conn != null){
                $id = $std->getIdP();
                $sql = "SELECT doctorName FROM doctors inner join patients on patients.doctorid = doctors.id where patients.idP = '$id'";
                $stmt =$conn->query($sql);
                $doctorName = $stmt->fetch()[0];
                return $doctorName;
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function  getAllDoctorName(){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();

            if($conn != null){
                $sql = "SELECT * FROM doctors";
                $stmt = $conn->query($sql);
                $result = $stmt->fetchAll();
                return $result;
            }
            
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

    public static function addPatient($patientName,$date, $symptom, $doctorName){ // phương thức tĩnh là loại phương thức có thể được gọi trực tiếp mà không cần tạo 1 đối tượng từ lớp chứa phuowg thức đó
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        // $sql = "INSERT INTO patients (patientName,date, symptom, doctorid) Values ('$doctorName', '$specialist')";
        // $stmt = $conn->prepare($sql);
        // $stmt ->execute();
        // $stmt = $conn->query($sql);
    }
        
    

}
?>