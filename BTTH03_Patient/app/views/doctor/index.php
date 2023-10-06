<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach Bac Si trong benh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- index này sẽ được gọi ở homecontroller -->
    <div class="container">
        <h3 class="text-center tex-uppercase text-success py-2">Danh sách bác sĩ</h3>
        <a class="btn btn-success" href="<?= DOMAIN.'/public/index.php?controller=doctor&action=add' ?>">Thêm bác sĩ </a>

        <?php if (isset($_GET['message'])) : ?>
             <h5 class="text-info"><?= $_GET['message'] ?></h5>
        <?php endif; ?>
        <!--  dungf domain de dieu huong web vi app-root la duong dan tuyet doi tren may minh-->
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Mã bác sĩ</th>
                <th scope="col">Tên bác sĩ</th>
                <th scope="col">Chuyên khoa</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                    <?php 
                        foreach($doctors as $each) {// lấy ra phần tử trong mảng , lặp để echo ra dữ liệu
                    ?> 
                    <tr>
                        <th scope="row"><?= $each->getId();?></th>
                        
                        <td><?= $each->getDoctorName()?></td>
                        <td><?= $each->getSpecialist()?></td>
                        <td><a href="<?= DOMAIN.'/public/index.php?controller=doctor&action=edit&id='.$each->getId() ?>"><i class="bi bi-pencil-square text-black "></i></a></td>
                        <!-- noi chuoi de hiu la bien -->
                        <td>
                            <form action="<?= DOMAIN . '/public/index.php?controller=doctor&action=delele'?>"
                                method="post">
                                <input hidden name="id" type="text" value="<?php echo $each->getId() ?>"/>
                                <button class="btn" onclick="return Del('<?php echo $each->getDoctorName() ?>')"><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>

                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <script>
        function Del(name){
        return confirm("Ban co chac muon xoa  "  + name + " khong?");
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>