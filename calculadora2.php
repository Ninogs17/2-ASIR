<?php

#Variables metodo POST
$numerorecogida1=$_POST["operando1"];
$numerorecogida2=$_POST["operando2"];
$selector=$_POST["operador"];


#Funcion Suma
function suma($numerorecogida1,$numerorecogida2){

    $res= $numerorecogida1 + $numerorecogida2;
    print "El resultado es ".$res."<br>";
}

#Funcion Resta
function resta($numerorecogida1,$numerorecogida2){

    $res= $numerorecogida1 - $numerorecogida2;

    print "El resultado es ".$res."<br>";
}

#Funcion multiplicacion
function multiplicacion($numerorecogida1,$numerorecogida2){

     $res= $numerorecogida1 * $numerorecogida2;

  print "El resultado es ".$res."<br>";
}

#Funcion Division
function division($numerorecogida1,$numerorecogida2){

    $res= $numerorecogida1 / $numerorecogida2;

    print "El resultado es ".$res."<br>";
}

#Realizacion de variables
switch ($selector) {
    case 'suma': 
        suma($numerorecogida1,$numerorecogida2);
        # code...
        break;
    

    case 'resta': 
    resta($numerorecogida1,$numerorecogida2);
    # code...
    break;

    case 'multiplicacion': 
    multiplicacion($numerorecogida1,$numerorecogida2);
    # code...
    break;

    case 'division': 
    division($numerorecogida1,$numerorecogida2);
    # code...
    break;

    default:
    # code...
    break;
}

?>
</body>
</html>