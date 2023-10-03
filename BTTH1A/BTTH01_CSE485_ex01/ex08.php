<?php 
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $min = PHP_INT_MAX; 
    $max = PHP_INT_MIN;
    $minString = '';
    $maxString = '';
    foreach($array as $string){
        $length = strlen($string);
        if($length < $min){
            $min = $length;
            $minString = $string;
        }
        if($length >$max){
            $max = $length;
            $maxString = $string;
        }
    }
    echo "Chuỗi có độ dài nhỏ nhất là: ". $minString. "', độ dài = ". $min. "<br>";
    echo "Chuỗi có độ dài lớn nhất là: ". $maxString. "', độ dài = ". $max;

?>
    <!--
            Trong PHP, `PHP_INT_MIN` và `PHP_INT_MAX` là hai hằng số được định nghĩa để đại diện cho giá trị nhỏ nhất và lớn nhất có thể được biểu diễn bằng kiểu dữ liệu nguyên (`integer`).

    - `PHP_INT_MIN` đại diện cho giá trị nhỏ nhất có thể biểu diễn bằng kiểu `integer` trên môi trường PHP hiện tại. Thường thì giá trị này sẽ là -2^31 hoặc -2^63, tùy thuộc vào phiên bản PHP và kiến trúc hệ thống. Đây là giá trị nhỏ nhất mà một biến kiểu `integer` có thể chứa.

    - `PHP_INT_MAX` đại diện cho giá trị lớn nhất có thể biểu diễn bằng kiểu `integer` trên môi trường PHP hiện tại. Thông thường, giá trị này sẽ là 2^31-1 hoặc 2^63-1, tùy thuộc vào phiên bản PHP và kiến trúc hệ thống. Đây là giá trị lớn nhất mà một biến kiểu `integer` có thể chứa.

    Hai hằng số này hữu ích khi bạn cần làm việc với các giá trị nguyên rất lớn hoặc rất nhỏ và muốn đảm bảo rằng bạn không vượt quá giới hạn của kiểu dữ liệu `integer`.
        -->