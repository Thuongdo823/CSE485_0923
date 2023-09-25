<?php
$servername = "localhost";
$user = "root";
$pass = "";
$database = "btth01_cse485";


// Xử lý đăng nhập
if(isset($_POST['sbmLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

}

// kết nối
$conn = new mysqli($servername, $user, $pass, $database);

// Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }



    // Truy vấn SQL để kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM users WHERE username = '$username' " ;
    $stmt = $conn->prepare($query);

    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result->num_rows>0) {
        // $user = $stmt->fetch();
        $row = $result->fetch_assoc();
        // lấy ra mật khẩu
        // $pass_hash = $user[1];
        if(password_verify($password,$row["password"])){
            // cấp thẻ 
            // session_start();
            // $_SESSION['isLogin'] = $user;
            header("Location:detail.php ");
            exit();
        }
        else{
            echo "Sai user or pass";
            // header("Location:login.php?error=not-matched-password");
        }
        // if (password_verify($password, $row["password"])) {
        //     // Đăng nhập thành công
        //     echo "Đăng nhập thành công!";
        // } else {
        //     // Sai mật khẩu
        //     echo "Sai mật khẩu!";
        // }
        // } else {
        // // Người dùng không tồn tại
        // echo "Người dùng không tồn tại!";
    }else{
        echo "Người dùng không tồn tại";
        // header("Location:login.php?error=not-existed");
    }



?>
