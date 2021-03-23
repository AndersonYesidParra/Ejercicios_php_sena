<?php
/*
9. Lea el nombre, la edad, el sexo (1= femenino, 2= masculino) y el estado 
civil (1= soltero, 2 = casado, 3 = otro) de una persona e imprima el nombre 
y la edad de la persona sólo si esta es mujer menor de edad, de lo contrario 
indique que estado civil tiene esa persona. */

$nombre = "Camila";
$edad = 18;
$sexo = 1 ; // 1 - femenino,  2 - masculino
$estadoSivil = "NO se sabe"; // 1 = soltero, 2 = casado, 3 = otro

if($sexo == 1 && $edad <18){
    echo ($nombre. " " . $edad);
}else{
    echo $estadoSivil;
}





?>