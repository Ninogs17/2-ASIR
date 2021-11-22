<?php 
//Recogida de datos
//Comprobamos si la variable infovuelo1 e infovuelo2 es creada si es que el formulario es enviado
if(isset($_POST["vuelo1"]) && isset($_POST["vuelo2"])){
    $selector=$_POST["opciones"];
    
    $vuelo1 = $_POST["vuelo1"];
        $codigo1 = $vuelo1["codigo1"]; 
        $ciudadorigen1 = $vuelo1["Ciudadorigen1"];
        $ciudaddestino1 = $vuelo1["Ciudaddestino1"];
        $precio1 = $vuelo1["Precio1"];
        $fechasalida1 = $vuelo1["Fechasalida1"];

    $vuelo2 = $_POST["vuelo2"];
        $codigo2 = $vuelo2["codigo2"]; 
        $ciudadorigen2 = $vuelo2["Ciudadorigen2"];
        $ciudaddestino2 = $vuelo2["Ciudaddestino2"];
        $precio2 = $vuelo2["Precio2"];
        $fechasalida2 = $vuelo2["Fechasalida2"];



//Une Vuelos
function Unir($vuelo1,$vuelo2){
    $res_unir= array_merge($vuelo1,$vuelo2);
        echo "<b>vuelos unidos: </b></br>";
        print_r($res_unir);
}

//Diferencia entre vuelos
function diferencia($vuelo1,$vuelo2){
    $res_dif= array_diff($vuelo1,$vuelo2);
        echo "<b>Diferencias entre vuelos: </b></br>";
        print_r($res_dif);
}

//Ordena Vuelos
function ordena($vuelo1,$vuelo2){
    $res_unir2= array_merge($vuelo1,$vuelo2);
    $Ordena_vuelos= ksort($res_unir2); #Se pude hacer también $Ordena_Vuelos= sort($Combinar_Vuelos2);
        echo "<b>Datos del vuelo ordenado: </b></br>";
        print_r($res_unir2);
}

//Informacion Comun
function informacion($vuelo1,$vuelo2){
    $res_infocomun= array_intersect($vuelo1,$vuelo2);
    echo "<b>Datos en común: </b></br>";
        print_r($res_infocomun);
}



#Realizacion de variables
switch ($selector) {
    case 'unir':
        Unir($vuelo1,$vuelo2);
        break;

    case 'diferencia':
        diferencia($vuelo1,$vuelo2);
        break;

    case 'ordenar':
        ordena($vuelo1,$vuelo2);
        break;

    case 'informacion':
        informacion($vuelo1,$vuelo2);
        break;

    default:
        echo "Elija otra opción";
        break;
    }
}
?>