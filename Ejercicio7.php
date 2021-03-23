<?php
/*7. ¿Cuál es el aumento correspondiente a cada empleado según el siguiente 
criterio? 
 17% si el sueldo es inferior a $5,000 
 10% si el sueldo está entre $5,000 y $15,000 
 5% si el sueldo es superior a $15,000 */


$empleados = [ "15000", "30000", "2500", "8000", "9000"];

for($i = 0; $i < count($empleados); $i++){
    echo ( "Empleado " . $i + 1 . ": " . $empleados[$i] . "<br>");
}

echo "<br>";
echo ("Nuevos valores: <br>");

for($i = 0; $i < count($empleados); $i++){
    if($empleados[$i] <= 5000){
        $empleados[$i] *= 1.17;
    }
    else if($empleados[$i] > 5000 && $empleados[$i] <=15000){
        $empleados[$i] *= 1.10;
    }
    else if($empleados[$i]  > 15000 ){
        $empleados[$i] *= 1.05;
    }
}

echo ("<br>");

for($i = 0; $i < count($empleados); $i++){
    echo ( "Empleado " . $i + 1 . ": " . $empleados[$i] . "<br>");
}


?>