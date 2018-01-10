#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    $file = fopen("/var/run/utmpx", "r");
    $i = 0;
    while ($utmpx = fread($file, 628)){
        $unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
        $array[$unpack['c'] .$i] = $unpack;
        $i++;
    }
    asort($array);
    foreach ($array as $val){
        if ($val['e'] == 7) {
            echo str_pad(substr(trim($val['a']), 0, 12), 12, " ")." ";
            echo str_pad(substr(trim($val['c']), 0, 12), 8, " ")." ";
            echo date("M", $val["f"]);
            echo str_pad(date("j", $val["f"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $val["f"]);
            echo "\n";
        }
    }
