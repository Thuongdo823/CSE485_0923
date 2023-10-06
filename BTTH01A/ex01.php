<?php 
function Tong($arrs){
    $sum = 0;
    for($i=0; $i<count($arrs) ; $i++){
        $sum +=$arrs[$i];
    }
    return $sum;
}

function Tich($arrs){
    $tich = 0;
    for($i=0; $i<count($arrs); $i++){
        $tich *= $arrs[$i];
    }
    return $tich;
}

function Hieu($arrs){
    $hieu = 1;
    for($i=0; $i<count($arrs); $i++){
        $hieu -= $arrs[$i];
    }
    return $hieu;
}

function Thuong($arrs){
    $thuong = $arrs[0];
    for($i=0; $i<count($arrs); $i++){
        $thuong /= $arrs[$i];
    }
    return $thuong;
}
    $arrs = [2,5,6,9,2,5,6,12,5];
    echo 'Tổng các phần tử = '.implode('+', $arrs) ."=" .Tong($arrs) . "<br/>"; 
    echo 'Tổng các phần tử = '.implode('*', $arrs) ."=" .Tich($arrs) . "<br/>"; 
    echo 'Tổng các phần tử = '.implode('-', $arrs) ."=" .Hieu($arrs) . "<br/>"; 
    echo 'Tổng các phần tử = '.implode('/', $arrs) ."=" .Thuong($arrs) . "<br/>"; 
?>
<!-- Hàm implode trong PHP được sử dụng để kết hợp các phần tử của một mảng thành 
một chuỗi, được ngăn cách bởi một ký tự được chỉ định -->