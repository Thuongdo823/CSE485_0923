<?php
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    include("../connect/connect.php");
    $sql="SELECT * FROM THELOAI WHERE ma_tloai=?";
    $stmt= $connect->prepare($sql);
    // $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    if($stmt->rowCount()>0){
        $sqlDelete="DELETE FROM THELOAI WHERE ma_tloai=?";
        $stmt= $connect->prepare($sqlDelete);
        // $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location:../admin1/category.php?deleteSuccess={$id}");
    }
    else{
        header("Location:../admin1/category.php");
    }
}
else{
    header("Location:../admin1/category.php");
}
// bindParam(): Đây là phương thức của đối tượng PDOStatement để ràng buộc một giá trị vào một tham số trong truy vấn.
// PDO::PARAM_INT: Đây là hằng số đại diện cho kiểu dữ liệu của tham số. Trong trường hợp này, PDO::PARAM_INT chỉ định rằng giá trị của $id là một số nguyên.

?>