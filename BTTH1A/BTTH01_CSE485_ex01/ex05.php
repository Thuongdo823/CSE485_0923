<?php
    $a = ['a' =>['b'=> 0, 'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3 ]]];
    $value1 = $a['b']['o']['b'];
    $value2 =  $a['a']['c'];
    $value3 = $a['a'];
    echo 'Giá trị = 3 trong mảng có key là b: ' .$value1 . '<br>';
    echo 'Giá tri = 1 trong mảng co key là c: ' .$value2 .'<br>';
    echo 'Phần tử có key là a có thông tin là: <br> ' ;
     print_r($value3);
 ?>
 <!-- Hàm "print_r" trong PHP được sử dụng để xuất ra màn hình các thông tin chi tiết 
 về một biến hay một mảng. Đây là một hàm hỗ trợ debug trong PHP và thường được sử dụng để hiển
  thị các giá trị của các biến để kiểm tra và phân tích dữ liệu. -->