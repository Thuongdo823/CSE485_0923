<?php 
    $array = array(1,2,3,4,5);
    unset($array['3']);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

?>