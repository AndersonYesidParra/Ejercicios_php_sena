<?php
/*8. Una empresa desea conocer el monto de comisión correspondiente a una 
venta realizada por un vendedor bajo las siguientes condiciones. Si la venta 
es menor a $1,000.00, se le otorga el 3% de comisión. Si la venta es de 
$1,000.00 o más, el vendedor recibe el 5% de comisión. */

$venta = 1000;


if( $venta <= 1000){
    $comision = $venta * 0.03;
}else{
    $comision = $venta * 0.05;
}

echo $comision;

?>