<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$respuesta = recuperaTexto("respuesta");

$respuesta = strtolower($respuesta);

if ($respuesta == "hot dog" || $respuesta == "hot-dog" || $respuesta == "hotdog" || $respuesta == "jocho" || $respuesta == "perro caliente" || $respuesta == "perro-caliente" || $respuesta == "mi compa" || $respuesta == "mi-compa" || $respuesta == "micompa") {
    $resultado = "Correcto la respuesta es Hot Dog";
} else {
    $resultado = "Incorrecto la respuesta es Hot Dog";
}

devuelveJson($resultado);
