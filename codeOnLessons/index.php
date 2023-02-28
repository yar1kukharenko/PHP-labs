<?php
    $a = 10;
    define("pi", 3.14); //const
    // echo pi;
    $f = 2.2;
    // echo gettype($f); //double
    $s = '2hello';
    // echo gettype((int)$s); //integer
    // echo (int)$s; //2

    $bool = true;
    // var_dump((bool)$a); // true
    // $floor = 3.123;
    // echo "\$floor = $floor<br>";
    // echo 'floor: '.floor($floor). '<br>';//3
    // echo 'round: '.round($floor).'<br>'; //4
    //  echo 'ceil: '.ceil($floor).'<br>'; //4

    $x = 2.3;
    // printf('%2.3d', $x); // 2
    // printf('%.3f', $x); //2.300


    $c = 6;
    $v = '6';
    // echo '$c + $v = ' .$c+$v.'<br>';
    // echo '$c - $v = ' .$c-$v.'<br>';
    // echo '$c * $v = ' .$c*$v.'<br>';
    // echo '$c / $v = ' .$c/$v.'<br>';
    // echo '$c % $v = ' .$c%$v.'<br>';
    // echo pow(6,8)

    // var_dump($c == $v);

    $e = '2';
    $h = '2a';

    // echo $e + $h; // 4 но ругается XAMPP
    // var_dump($e > $h); 
    var_dump($c and $v);

    $min = ($a < $b) ? $a:$b;

    

?>