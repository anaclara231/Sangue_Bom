<?php
 
 function validaCPF($cpf){
 $cpf=preg_replace('/[^0-9]/','',$cpf);
 $resultadoB=0;
$resultadoA = 0;
for($i = 0, $x = 10; $i <= 8; $i++, $x--) {
    $resultadoA += $cpf[$i] * $x;
    
}

for($i = 0, $x = 11; $i <= 9; $i++, $x--) {
    $resultadoB += $cpf[$i];
    if (str_repeat($i, 11) == $cpf) {
        return false;
    }
}
if ($resultadoB%11<2){
    $soma2=0;
}
else {
    $soma2=$resultadoB%11;
    $soma2=11-$soma2;
}
if ($resultadoA%11<2){
    $soma=0;
}
else {
    $soma=$resultadoA%11;
    $soma=11-$soma;
}
if($soma != $cpf[9] or $soma2 != $cpf[10]){ 
    return false;
}
else {
    return true;
}

}
    function limpaCPF_CNPJ($valor){
        $valor = str_replace(".", "", $valor);
        $valor = str_replace(",", "", $valor);
        $valor = str_replace("-", "", $valor);
        $valor = str_replace("/", "", $valor);
        $valor = str_replace("(", "", $valor);
        $valor = str_replace(")", "", $valor);
        $valor = str_replace(" ", "", $valor);
        return $valor;
       }
?>