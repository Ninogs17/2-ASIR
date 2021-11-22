<?php

$numerorecogida1=$_POST["operando1"];
$selector=$_POST["operador"];


#Decimal a binario.
function debi($numerorecogida1){
    $res=decbin($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en binario";
}


#Decimal a octal.
function deoc($numerorecogida1){
    $res= decoct($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en octal";
}

#Decimal a hexadecimal.
function dehe($numerorecogida1){
    $res= dechex($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en hexadecimal";
}

#Binario a decimal.
function bide($numerorecogida1){
    $res= bindec($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en decimal";
}

#Octal a deciaml.
function ocde($numerorecogida1){
    $res= octdec($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en decimal";
}

#Hexadecimal a decimal.
function hede($numerorecogida1){
    $res= hexdec($numerorecogida1);
    echo "El número " . $numerorecogida1 . " es " . $res . " en decimal";
}


#Variables
switch ($selector) {
    case 'Decbin': 
        debi($numerorecogida1);
    break;
    
    case 'Decoct': 
        deoc($numerorecogida1);
    break;
    
    case 'Dechex': 
        dehe($numerorecogida1);
    break;

    case 'Bindec': 
        bide($numerorecogida1);
    break;

    case 'Ocdec': 
        ocde($numerorecogida1);
    break;

    case 'Hexdec': 
        hede($numerorecogida1);
    break;

}


?>
</body>
</html>