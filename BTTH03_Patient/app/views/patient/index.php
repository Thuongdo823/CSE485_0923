<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH BỆNH NHÂN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- index này sẽ được gọi ở homecontroller -->
    <div class="container">
        <h3 class="text-center tex-uppercase text-success py-2">Thông tin bệnh nhân</h3>
        <a class="btn btn-success" href="<?=DOMAIN.'/public/index.php?controller=patient&action=add'?>">Thêm bệnh nhân </a>

       
        
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Mã bệnh nhân</th>
                <th scope="col">Họ tên bệnh nhân</th>
                <th scope="col">Ngày khám</th>
                <th scope="col">Triệu chứng</th>
                <th scope="col">Bác sĩ khám</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                    <?php 
                        foreach($patients as $each) :// lấy ra phần tử trong mảng , lặp để echo ra dữ liệu
                    ?> 
                    <?php 
                    $doctorName = $patientService->getDoctorNameByPatient($each);
                    ?>
                    <tr>
                        <th scope="row"><?= $each->getIdP();?></th>
                        <td><?= $each->getPatientName();?></td>
                        <td><?= $each->getDate()->format('Y-m-d');?></td>
                        <td><?= $each->getSymptom();?></td>
                        <td><?= $doctorName?></td>
                        <td><a href=""><i class="bi bi-pencil-square text-black "></i></a></td>
                        
                        <td>
                            <a href=""><i class="bi bi-trash3 text-black"></i></a>
                            
                           
                            
                    
                        </td>

                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <script>
       
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>