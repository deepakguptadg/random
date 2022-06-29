<?php
    echo sprintf( "%04d", rand(000000000000000,99999999999999));
    echo "<br>";
    
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    echo substr(str_shuffle($permitted_chars), 0, 10);
    echo "<br>";
    
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $user_id = 'dg16-'.substr(str_shuffle($permitted_chars), 0, 18);
    echo $user_id;
    echo "<br>";
?>