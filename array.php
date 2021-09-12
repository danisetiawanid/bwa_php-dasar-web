<?php

// Array

    //Indexed Array
    $a = ['BMW', 'HONDA', 'SUZUKI'];
    var_dump($a);

    //Associative Array
    //Inonesia dan amerika adalah key
    $b = [
        'Indonesia' => 'Nasi Padang',
        'Amerika' => 'Steak'
    ];

    //Multidimesnional Arrau
    $c = [
        'a' => $a,
        'b' => $b
    ];

    $d = [
        'c' => $c,
        'lainnya' => [1,2,3,4,5,6]
    ];

    var_dump($d);