<?php
    $initial = '555';
    # convertion Octal
    $a = octdec($initial);
    echo $a."\n";

    # conversion degres vers radian
    $b = deg2rad($a);
    echo $b."\n";

    # cosinus
    $c = cos($b);
    echo $c."\n";

    # 3 decimales
    $d = round($c,3);
    echo $d."\n";

    # logarythme
    $e = log($d);
    echo $e."\n";

    # valeur absolue
    $f = abs($e);
    echo $f."\n";

    # inverse arccosinus
    $g = acos($f);
    echo $g."\n";

    # convert radian vers degres
    $h = rad2deg($g);
    echo $h."\n";

    # floor
    $i = floor($h);
    echo $i."\n";

    # soustraction
    $j = (int)$i - 47;
    echo $j."\n";    