<?php
require_once "connect/connect.php";
// session_start();
if(isset($_POST['sbmLogin'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql_check = "SELECT * FROM users where username = '$user' or emails = '$user'";
    $stmt = $connect->query($sql_check);
    $user = $stmt->fetch();
    if($stmt->rowCount() > 0){
        $pass_hash = $user[3]; // Lấy ra mật khẩu
        if(password_verify($pass, $pass_hash)){
            session_start(); // Hàm password_verify() là một hàm trong ngôn ngữ lập trình PHP được sử dụng để kiểm tra xem một mật khẩu đã được hash (mã hóa) bằng hàm password_hash() có khớp với một chuỗi mật khẩu ban đầu hay không.
            $_SESSION['isLogin'] = $user;
            header("Location:index.php");
        }
        else{
            header("Location:login.php?error=not-matched-password");
        }
    }
    else{
        header("Location:login.php?error=not-existed");
    }
    // try{
    //     include "./connect/connect.php";
    //     $sql_check = "SELECT * FROM users where username = '$user' or emails = '$user'";
    //     $stmt = $connect->prepare($sql_check);
    //     $stmt->execute();
    //     if($stmt->rowCount() > 0){
    //         $user = $stmt->fetch();
    //         $pass_hash = $users[3]; // Lấy ra mật khẩu
    //         if(password_verify($pass, $pass_hash)){ // Hàm password_verify() là một hàm trong ngôn ngữ lập trình PHP được sử dụng để kiểm tra xem một mật khẩu đã được hash (mã hóa) bằng hàm password_hash() có khớp với một chuỗi mật khẩu ban đầu hay không.
    //             session_start(); //Hàm session_start() là một hàm trong ngôn ngữ lập trình PHP được sử dụng để bắt đầu phiên làm việc (session) của người dùng.
    //             $_SESSION['isLogin'] = $user;
    //             header("Location:index.php");
    //         }
    //         else{
    //             header("Location:login.php?error=matched-password");
    //         }
            
    //     }
    //     else{
    //         header("Location:login.php?error=not-existed");
    //     }
    // }
    // catch(PDOException $e){
    //     echo $e->getMessage();
    // }
}


?>
<!-- Dòng mã $_SESSION['isLogin'] = $user; trong ngôn ngữ lập trình PHP có nhiệm vụ lưu trữ thông tin về trạng thái đăng nhập của người dùng vào biến phiên ($_SESSION).

Trong ví dụ này, giả sử biến $user chứa thông tin về người dùng đã đăng nhập. Dòng mã $_SESSION['isLogin'] = $user; sẽ gán giá trị của biến $user vào biến phiên với khóa
 là 'isLogin'. Điều này cho phép bạn lưu trữ thông tin về trạng thái đăng nhập của người dùng trong phiên làm việc. -->