<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm bác sĩ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
    <h3 class="text-center tex-uppercase text-success py-2 mt-3">Cập nhật thông tin bác sĩ</h3>
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="POST" action="<?=DOMAIN. '/public/index.php?controller=doctor&action=edit' ?>">
            <div class="mb-3">
              <label for="id" class="form-label">Mã bác sĩ</label>
              <input type="text" name="id" id="id" class="form-control" value="<?= $doctor->getId();  ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tên bác sĩ</label>
              <input type="text" name="doctorName" id="doctorName" class="form-control" value="<?= $doctor->getDoctorName();?>" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Chuyên khoa</label>
              <input type="text" name="specialist" id="specialist" class="form-control" value="<?= $doctor->getSpecialist();?>" required>
            </div>
            
            
            <button class="btn btn-primary">Lưu</button>
            <button class="btn btn-warning">Quay lại</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
