<?php
include("../connect/connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["MaTL"]) && isset($_POST["TenTL"])){
        $id=$_POST["MaTL"];
        $name=trim($_POST["TenTL"]);
        $sql="Select * from theloai where ma_tloai=? or ten_tloai=?";
        $stmt=$connect->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$name);
        $stmt->execute();
        if($stmt->rowCount()>0){
            header("Location:../../admin1/add_category.php?exist={$id}");
        }
        else{
            $sql="INSERT INTO THELOAI(ma_tloai,ten_tloai) VALUES
            (
                ?,?
            );";
            $stmt=$connect->prepare($sql);
            $stmt->bindParam(1,$id); 
            $stmt->bindParam(2,$name);
            $stmt->execute();
            header("Location:../admin1/category.php?success={$id}");
        }
    }
    else{
        header("Location:..admin1/category.php");
    }
}

// Biểu thức $_SERVER["REQUEST_METHOD"] == "POST" là một điều kiện trong PHP được sử dụng để kiểm tra phương thức yêu cầu (request method) của một yêu cầu HTTP.

// Biến toàn cục $_SERVER trong PHP chứa thông tin về môi trường và các biến liên quan đến máy chủ và yêu cầu từ người dùng. Trong trường hợp này, $_SERVER["REQUEST_METHOD"] chứa phương thức yêu cầu được gửi từ trình duyệt web.
?>