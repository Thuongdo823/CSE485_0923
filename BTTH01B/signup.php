<?php
    if(isset($_GET['error'])){
        echo "<p>{$_GET['error']}</p>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
<style>
    .sign-in{
        background-color: #696969;
        border-radius: 10px;
    } 
    .option{
        margin-bottom: 25px;
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row mb-6">
            <?php 
                include "./layout/header.php";
            ?>
        </div>

        <div class="row  " style="margin-top: 50px;">
            <div class="col-md-4"></div>
            <div class="col-md-4 sign-in" >
                <!-- form đăng nhập -->
                <form action="main-signup.php" method="post">
                    <div class="mt-3">
                        <span class="h4 text-white">Sign Up</span>
                    </div>    
                
                    <div class="mt-5 ">
                        <div class="input-group mb-3 input-group-md">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>

                        <div class="input-group mb-4">
                           <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div> 
                        
                        <div class="input-group mb-4">
                           <span class="input-group-text"><i class="bi bi-key-fill"></i></i></span>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div> 
                        
                        <!-- <div class="input-group mb-4">
                           <span class="input-group-text"><i class="bi bi-key-fill"></i></i></span>
                            <input type="password" class="form-control" name="password1">
                        </div> -->
                        
                        <div class="form-submit mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4 mb-5">
                                    <button type="submit" class="btn btn-warning btn-lg" name="sbm">SignUp</button>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </form>
            </div>

            <div class="col-md-4">

            </div>
        </div>

        <div class="row " style="margin-top: 220px;">
            <?php 
                include "../layout/end.php";
            ?>
        </div>
    </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>