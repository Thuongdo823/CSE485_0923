<?php 
    include("../connect/connect.php");
    $sql = "SELECT * FROM theloai";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>