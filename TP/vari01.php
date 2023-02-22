<?php
    $riel = 2103942;
    $kyat = 19092;
    $krones = 109;
    $lek = 9094;

    echo $riel;
    echo "\n".$kyat;
    echo "\n".$krones;    
    echo "\n".$lek;

    $triel = 1.06;
    $tkyat = .75;
    $tkrones = 1.42;
    $tlek = .92;

    $dolriel = $riel * $triel;
    $dolkyat = $kyat * $tkyat;
    $dolkrones = $krones * $tkrones;
    $dollek = $lek * $tlek;

    echo "\n".$dolriel;
    echo "\n".$dolkyat;
    echo "\n".$dolkrones;    
    echo "\n".$dollek;

    echo $dolriel + $dolkyat + $dolkrones + $dollek - 4;