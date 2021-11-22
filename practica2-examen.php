<?php

$text1=$_POST["texto1"];
$text2=$_POST["texto2"];
$text3=$_POST["texto3"];
$selector=$_POST["texto"];



#Convierte el texto en mayusculas.
function mayusculas($text1){
    $res= strtoupper($text1);
    print "El resultado es: ".$res."<br>";
}


#Desordena el texto introducido.
function desordenar($text2){
    $res= strtoupper($text2);
    print "El resultado es: ".$res."<br>";
}
#Convertir en array.
function convertir($text1){
    $array1 = str_split($text1);
    
    print_r($array1);
    
}
#Cuenta el numero de caracteres
function cuentaletras($text1){

    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

}
#Reemplazar palabra
function reemplazar($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    print "Se reemplaza por: ".$res."<br>";

}



switch ($selector) {
    case 'Mayusculas':
       mayusculas($text1);
    break;
    case 'Desordenar':
        desordenar($text2);
    break;
    case 'Convertir':
        convertir($text1,$text2,$text3);
    break;
    case 'Contar':
        cuentaletras($text1);
    break;
    case 'Reemplazar':
        reemplazar($text3,$text2,$text1);
    break;
    default:
        
    break;
}






?>

</body>
</html>