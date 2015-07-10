<?php
function SumaHoras( $hora, $minutos_sumar ) 
{ 
$minutoAnadir=$minutos_sumar;

$segundos_horaInicial=strtotime($hora);

$segundos_minutoAnadir=$minutoAnadir*60;

$nuevaHora=date("H:i:s",$segundos_horaInicial+$segundos_minutoAnadir);

return $nuevaHora;
} //fin función

$hora = '01:00:00';
$minutos_sumarle   = 90;

//EJECUTO LA FUNCIÓN y asigno resultado a una variable
$resultado = SumaHoras( $hora , $minutos_sumarle );

//IMPRIMO RESULTADO
echo 'A esta Hora: '.$hora.' se le sumaran: '.$minutos_sumarle.' minutos : '.$resultado;

?>
