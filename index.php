<?php 
$entrada = "<input name=\"pais\" id=\"pais\" list=\"paises\" placeholder=\"Introduce tu pais\"/>";
print "<h1>Hola mundo desde PHP</h1>$entrada";
$variable2 = "casa";
$variable1 = "Casa";

$resultado = strcmp($variable1, $variable2);
print "<br>" . $resultado;
if($resultado == 0){
    print "<br>true";
} else {
    print "<br>false";
}

?>