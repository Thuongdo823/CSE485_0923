<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm bệnh nhân</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
    <h3 class="text-center tex-uppercase text-success py-2 mt-3">Thông tin bệnh nhân</h3>
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
            
          <form method="POST" action="" enctype="multipart/form-data">
            <!-- <div class="mb-3">
              <label for="id" class="form-label">Mã sinh viên</label>
              <input type="text" name="id" id="id" class="form-control">
            </div> -->
            <div class="mb-3">
              <label for="" class="form-label">Họ và tên bệnh nhân</label>
              <input type="text" name="patientName" id="patientName" class="form-control">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Ngày khám</label>
              <input type="date" name="date" id="date" class="form-control">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Triệu chứng</label>
              <input type="text" name="symptom" id="symptom" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Bác sĩ khám</label>
              <input type="text" name="doctorID" id="doctorID" class="form-control">
            </div>

            
            
            <button type="submit" class="btn btn-primary" name="sbmAdd">Thêm</button>
            <!-- <a href="?controller=student$action=list" class="btn btn-warning">Quay lại</a> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>