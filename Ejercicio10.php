<?php
/*10. Lea el nombre, la edad y el sexo (1= femenino, 2= masculino) de una 
persona y si esta es de sexo masculino y mayor de edad imprima el 
nombre, de lo contrario imprima el nombre y edad de la persona. */

$nombre = "Anderson";
$edad  = "21";
$sexo = 1 ;      //1=femenino, 2=masculino

if ($sexo == 2 && $edad >= 18){

    echo $nombre;
    
}else {

    echo "Nombre ". $nombre . " Edad: " . $edad;
}

?>