<?php

    if (isset($_POST["button"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        calcular($operacion);
    }

    function calcular($calculo){

        if(!strcmp("Suma", $calculo)){
            global $num1;
            global $num2;
            echo "El resultado es: " . ($num1 + $num2);
        }
        if(!strcmp("Resta", $calculo)){
            global $num1;
            global $num2;
            echo "El resultado es: " . ($num1 - $num2);
        }
        if(!strcmp("Multiplicacion", $calculo)){
            global $num1;
            global $num2;
            echo "El resultado es: " . ($num1 * $num2);
        }
        if(!strcmp("Division", $calculo)){
            global $num1;
            global $num2;
            echo "El resultado es: " . ($num1 / $num2);
        }
        if(!strcmp("Modulo", $calculo)){
            global $num1;
            global $num2;
            echo "El resultado es: " . ($num1 % $num2);
        }
    }
?>
