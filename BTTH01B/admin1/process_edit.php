<?php 
    include '../connect/connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_check = "SELECT *  FROM theloai where ma_tloai = '$id'";
        $stmt = $connect->prepare($sql_check);
        $stmt->execute();
        if(isset($_POST['sbmSave'])){
            $name = $_POST['tentheloai'];
            $sql_update = "UPDATE theloai SET ten_tloai = '$name' where ma_tloai = '$id'";
            $stmt = $connect->prepare($sql_update);
            $stmt->execute();
            header("Location:../../admin1/category.php?succcess=updated");
        }
    }

?>