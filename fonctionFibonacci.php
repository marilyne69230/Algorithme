<?php

function fibonacci($nombre) {
    if ($nombre == 0) {
        return 0;
    }
    if ($nombre == 1) {
        return 1;
    }
    $nombre = fibonacci($nombre-1) + fibonacci($nombre-2);
    return $nombre;
}

var_dump(fibonacci(10));