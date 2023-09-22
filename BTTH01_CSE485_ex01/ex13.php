<?php 
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $count = count($numbers);
    $sum = array_sum($numbers);
    $average = $sum / $count;
    
    echo 'Giá trị trung bình của mảng là: ' .$average ."<br>";
    echo 'Các giá trị trong mảng lớn hơn giá trị trung bình: ';
    for($i=0; $i<count($numbers) ; $i++){
        if($numbers[$i] > $average){
            echo " ".$numbers[$i] ;
        }
    }
    echo '<br>';
    
    echo 'Các giá trị trong mảng nhỏ hơn hoặc bằng giá trị trung bình: ';
    for($i=0; $i<count($numbers) ; $i++){
        if($numbers[$i] <= $average){
            echo " ".$numbers[$i] ;
        }
    }
?>