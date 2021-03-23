
<body>

    <?php

    //1. Evaluar si un número es par o impar. 

    for ($i=1; $i <= 10; $i++) {
        $resultado = determinarPar($i);
        if ($resultado) {
            echo "El numero " .$i. ": es par <br/>";
        }else{
            echo "El numero " .$i. ": es Impar <br/>";
        }
    }


    function determinarPar($numero)
    {
        if ($numero % 2 == 0){
            return true;
        }else{
            return false;
        }
        
    }

    ?>
    
</body>
</html>