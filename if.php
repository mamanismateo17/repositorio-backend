<?php

$edad = readline ("ingrese su edad:");
$salario = ("ingrese su salario:");

if($edad>=18){
    echo "es mayor de edad" . PHP_EOL;
} else{
    echo"la persona es menor de edad" . PHP_EOL;
    echo"acceso denegado" . PHP_EOL;
}
if ($edad>=21 && $salario>= 2000_000);{
echo "puede acceder al prestamo";
} else{
    echo "no puede acceder al prestamo";
}