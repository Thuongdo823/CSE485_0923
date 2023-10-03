<?php 
    
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    
    echo '"Màu '.$arrs[0] .' là màu yêu thích của Anh, ' .$arrs[3] .' là màu yêu thích của Sơn, ' .$arrs[2] .' là màu yêu thích của Thắng, còn màu yêu thích của tôi là '. $arrs[3];

//     
//     $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
//     $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
//     $result = '';
//     $count = count($arrs);
    
//     for ($i = 0; $i < $count; $i++) {
//         $color = '';
//         if (in_array($arrs[$i], ['đỏ', 'xanh', 'trắng', 'cam'])) {
//             $color = 'color: red;';
//         }
        
//         $result .= "Màu <span style=\"$color\">{$arrs[$i]}</span> là màu yêu thích của {$names[$i]}";
        
//         if ($i < $count - 1) {
//             $result .= ', ';
//         } else {
//             $result .= '.';
//         }
//     }
    
//     echo $result;
// 
?> 