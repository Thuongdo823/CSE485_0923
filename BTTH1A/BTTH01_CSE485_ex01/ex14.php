<?php 
    $array1 = [
                [77, 87],
                [23, 45]
            ];
    $array2 = ['giá trị 1', 'giá trị 2'];
    // $mergedArray = array();
    // foreach($array1 as $key => $value){
    //     $mergedArray[$key] = array_merge([$array2[$key]], $value);

    // } 

    // echo '<pre>';
    // print_r($mergedArray);
    // echo '</pre>';
    

    $result = [];
    for($i = 0; $i<count(($array1)); $i++){
        $mergedArray = array_merge([$array2[$i]], $array1[$i]);
        $result[$i] = $mergedArray;
    }
    echo '<pre>';
    print_r($result);
    echo '</pre>';
?>