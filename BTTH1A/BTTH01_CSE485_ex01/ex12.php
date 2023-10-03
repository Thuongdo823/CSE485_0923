<?php 
    $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       ];
    // Lấy ra phần tử đầu tiên
    echo "Phần tử đầu tiên của mảng là: " .reset($numbers) .'<br>';

    // Lấy ra phần tử cuối cùng
    echo "Phần tử cuối cùng của mảng là: " .end($numbers) . '<br>';

    // Tìm số lớn nhất 
    echo "Số lón nhất trong mảng là: " .max($numbers) .'<br>';
    
    // Số nhỏ nhất
    echo "Số nhỏ nhất trong mảng là: " .min($numbers) .'<br>';

    // Tổng các giá trị trong mảng
    echo "Tổng các giá trị trong mảng là: " .array_sum($numbers) .'<br>';
    
    // Sắp xếp theo thứ tự tăng
    asort($numbers); // hoặc hàm asort() là hàm sắp xếp theo chiều tăng các giá trị;
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
    echo " Sắp xếp theo chiều giảm: <br>";
    arsort($numbers); // hoặc hàm arsort() là hàm sắp xếp theo chiều giảm dần các giá trị ;
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    // Sắp xếp theo thứ tự tnwg, giảm dần giảm các key
    echo "Sắp xếp theo chiều tăng của khóa key <br>";
    ksort($numbers); // hoặc hàm ksort() là hàm sắp xếp theo chiều tăng các key;
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    echo "Sắp xếp theo chiều giảm của khóa key <br>";
    krsort($numbers); // hoặc hàm krsort() là hàm sắp xếp theo chiều giảm các các key;
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
?>