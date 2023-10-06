<?php 
require_once APP_ROOT. '/app/models/Doctors.php';
require_once APP_ROOT. '/app/lib/DBConnection.php';
class DoctorService{
    public function getAllDoctors(){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM doctors";
                $stmt = $conn->query($sql);
                $result = $stmt->fetchAll();
                $doctors = array();
                foreach ($result as $row){
                    $doctor = new Doctors($row[0], $row[1], $row[2]);
                    $doctors[] = $doctor;
                }
                return $doctors;
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }

    public static function addDoctor($doctorName, $specialist){ // phương thức tĩnh là loại phương thức có thể được gọi trực tiếp mà không cần tạo 1 đối tượng từ lớp chứa phuowg thức đó
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        $sql = "INSERT INTO doctors (doctorName, specialist) Values ('$doctorName', '$specialist')";
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
        // $stmt = $conn->query($sql);
    }

    public static function deleteDoctor($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = "DELETE  FROM doctors where id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            }
        }

    public  static function editDoctor($id,$doctorName, $specialist){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null){
            $sql = "UPDATE doctors SET (doctorName=?, specialist=?)where id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$doctorName, $specialist, $id]);
        }

    }
    
}
?>