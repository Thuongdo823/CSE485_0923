

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới trang thể loại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                include "../layout/header/admin.php";
            ?>
        </div>
        
        <form action="../admin1/process_add.php" method="post">
            <div class="row mt-5">
                <span class="h2 text-center ">THÊM MỚI THỂ LOẠI</span>
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <!-- <span class="h2 text-align-center justify-conten-between">THÊM MỚI THỂ LOẠI</span> -->
                    <div class="input-group flex-nowrap mt-5">
                        <span class="input-group-text" id="addon-wrapping">Mã thể loại</span>
                        <input name="MaTL" type="text" class="form-control" placeholder="" aria-label="Theloai" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mt-5">
                        <span class="input-group-text" id="addon-wrapping">Tên thể loại</span>
                        <input name="TenTL" type="text" class="form-control" placeholder="" aria-label="Theloai" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-9"> </div>
                <div class="col-md-2">
                <button type="submit" class="btn btn-success m-3" name="sbmAdd">Thêm</button>
                <button type="button" class="btn btn-warning" name="sbmReturn"><a href="category.php" style="text-decoration: none;" class="text-dark">Quay lại</a></button>
                </div>
            </div>
        </form>

        <div style="margin-top: 250px;">
            <?php 
                include "../layout/end.php";
            ?>
        </div>
    </div>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>