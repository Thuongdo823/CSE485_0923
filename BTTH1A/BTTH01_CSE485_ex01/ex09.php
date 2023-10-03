<?php 
    // function Lowercase($arr){
    //     $result = array();
    //     foreach($arr as $value){
    //         $result[] = strtolower($value); // CHuyển đổi ký tự thành các ký tự thường và thêm vào mảng kq
    //     }
    //     return $result;
    // }
    // $arrs = ['1', 'B', 'C', 'E'];
    // $lowercaseArr = Lowercase($arrs);
    // var_dump($lowercaseArr); 

    $arr = ['B','C','E'];
     
    for($i = 0; $i <count($arr); $i++){
        $arr[$i] = strtolower($arr[$i]);
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>