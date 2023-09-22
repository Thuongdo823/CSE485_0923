<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid">
        <div class="row">
                <?php 
                    include "./layout/header.php";
                ?>
        </div>

        <div class="row">
            <img src="./img/poster.png" alt="">
            <center class="text-primary mt-2 mb-2">TOP BÀI HÁT YÊU THÍCH</center>
        </div>
        

        <div class="row">
            <div class="col-md-3  text-align-center justify-content-between">
                <img style="width: 335px; height:220px;" src="./img/caylagio.png" alt="" srcset="">
                <center class="mt-3 mb-3" ><a href="./detail.php" style="text-decoration:none;">Cây, lá và gió</a></center>
            </div>

            <div class="col-md-3 text-align-center text-align-center">
                <img src="./img/cuocsongmenthuong.png" alt="" srcset="">
                <center class="text-primary mt-3 mb-3">Cuộc sống yêu thương</center>
            </div>

            <div class="col-md-3">
                <img  src="./img/longme.png" alt="" srcset="">
                <center class="text-primary mt-3 mb-3">Lòng mẹ</center>
            </div>

            <div class="col-md-3">
                <img src="./img/phoipha.png" alt="" srcset="">
                <center class="text-primary mt-3 mb-3">Phôi pha</center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="./img/noitinhyeu.png" alt="">
                <center class="text-primary mt-3 mb-3">Nơi tình yêu bắt đầu</center>
            </div>
        </div>

        <?php 
            include "./layout/end.php";
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
    
</html>