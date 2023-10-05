<?php 
    include("../admin1/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại- vùng quản trị</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
                include '../layout/header/admin.php';
            ?>
        </div>

        <div class="row mt-5">
            <div class="col-md-1">

            </div>

            <div class="col-md-10">
                <div class="add">
                    <button type="button" class="btn btn-success"><a href="../admin1/add_category.php" class="text-white" style="text-decoration: none;">Thêm mới</a></button>
                </div>
                <table class="table">
                    <thead>


                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($result as $row){
                        ?>
                            <tr class="">
                                <td><?=$row[0]?></td>
                                <td><?=$row[1]?></td>
                                <td><a class="nav-link text-blue" href="../admin1/edit-category.php?id=<?=$row[0] ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return Del('<?php echo $row[0];?>, <?php echo $row[1];?>')" class="nav-link text-blue"  href="./delete-category.php?ma_tloai=<?=$row[0];?>&ten_tloai=<?=$row[0];?>"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                            </tr>
                            
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

        
        <div style="margin-top: 280px;">
            <?php 
                include "../layout/end.php";
            ?>
        </div>
        
    </div>
<script>
    function Del(id,name){
        return confirm("Bạn có chắn chắn muốn xóa id: "+id+ " " +name+"?");
    }
</script>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>