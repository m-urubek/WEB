<?php

$file = 'obrazek.png';

if (file_exists($file) === false){
    echo "Chyba.";
    return;
}

header("Content-Type: image");
readfile($file);