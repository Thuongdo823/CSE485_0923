<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "./layout/header.php";
            ?>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-md-4">
                <img src="./img/caylagio.png" alt="" >
            </div>
            <div class="col-md-8">
                <div>
                    <h4 class="text-primary">Cây và gió</h4>
                    <span class="h4 mb-3" >Bài hát: </span> <span style="font-size: 20px;">Cây và gió</span>
                    <br>
                    <span class="h4 mb-3">Thể loại: </span> <span  style="font-size: 20px;">Nhạc trữ tình</span>
                </div>
                <div class="mt-3"  style="font-size: 20px;">
                    <span class="h4">Tóm tắt:</span>
                    Em và anh, hai đứa quen nhau thật tình cờ. Lời bài hát của anh từ bài hát "Cây và gió" đã làm tâm hồn 
                    em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biêt những suy nghĩ tận sâu trong tim 
                    mình. Bởi vì em nhút nhát, em không giám đối mặt với thực tế khắc nghiệt, hay thựa ra em không giám đối diện
                    với chính mình.
                </div>

                <div class="mt-3 " style="font-size: 20px;">
                    <span class="h4">Nội dung:</span>
                    Em và anh, hai đứa quen nhau thật tình cờ. Lời bài hát của anh từ bài hát "Cây và gió" đã làm tâm hồn 
                    em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biêt những suy nghĩ tận sâu trong tim 
                    mình. Bởi vì em nhút nhát, em không giám đối mặt với thực tế khắc nghiệt, hay thựa ra em không giám đối diện
                    với chính mình.
                </div>

                <div class="mt-3">
                    <span class="h4" >Tác giả: </span> <span style="font-size: 20px;">Nguyễn Văn Giả</span>
                </div>
            </div>
        </div>

        <?php 
            include "./layout/end.php";
        ?>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>