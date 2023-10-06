<?php 
    
    include "connect/connect.php";
    session_start(); // bắt đầu hoặc khởi tạo phiên bản công việc (phiên) làm việc cho người dùng trên trang web
    if(isset($_POST['sbm'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR emails='$email'";
        $query_check = $connect->prepare($sql_check);
        $query_check->execute();

        if($query_check->rowCount()>0){
            header('location: signup.php?error=exist');
        }else{
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, emails, pass) VALUES ('$user', '$email', '$pass_hash')";
            $query_insert = $connect->prepare($sql_insert);
            $query_insert->execute();
            header('location: login.php?success=added');
        }   
    }
?>