<?php
/*11. Leer el nombre de un empleado, el salario básico por hora y el número de 
horas trabajadas durante una semana. Calcular el salario neto, teniendo en 
cuenta que si el número de horas trabajadas durante la semana es mayor a 
48, esas horas de mas se consideran horas extras y tienen un 25% de 
recargo.*/

$nombre =  "C";
$salarioBasicoxHora = 10000;
$horasTrabajadas = 15; // > 48 = horas extra = 25% +
$totalHorasTrabajadas = $horasTrabajadas * 5;
$horasExtra;

$salarioNeto = ($salarioBasicoxHora * $totalHorasTrabajadas);

if($totalHorasTrabajadas > 48){
    $horasExtra = $totalHorasTrabajadas - 48;
    echo "Las horas extras trabajadas son: ". $horasExtra . " <br> ";     
    $salarioNeto += $horasExtra * ($salarioBasicoxHora * 1.25);
    echo "El sueldo es con horas extras es de : ".$salarioNeto;
}else{
    echo "Sueldo es de: ".$salarioNeto . "<br>";
}








?>