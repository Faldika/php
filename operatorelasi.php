<?php
    //sama dengan (==)
    $a = 5;
    $b = '5';
    var_dump($a == $b); // output: bool(true)
    echo "<hr/>";

    //identik (===)
    $a = 5;
    $b = '5';
    var_dump($a === $b); // output: bool(false)
    echo "<hr/>";

    //tidak sama dengan (!= atau <>)
    $a = 5;
    $b = 6;
    var_dump($a != $b); // output: bool(true)
    echo "<hr/>";

    //tidak identik (!==)
    $a = 5;
    $b = '5';
    var_dump($a !== $b); // output: bool(true)
    echo "<hr/>";

    //lebih besar dari (>)
    $a = 10;
    $b = 5;
    var_dump($a > $b); // output: bool(true)
    echo "<hr/>";

    //lebih kecil dari (<)
    $a = 3;
    $b = 7;
    var_dump($a > $b); // output: bool(true)
    echo "<hr/>";

    //lebih besar dari atau sama dengan (>=)
    $a = 8;
    $b = 8;
    var_dump($a > $b); // output: bool(true)
    echo "<hr/>";

    //lebih kecil dari atau sama dengan (<=)
    $a = 4;
    $b = 5;
    var_dump($a > $b); // output: bool(true)
    echo "<hr/>";

