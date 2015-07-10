<?php
function sumar($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$h2s = date('s', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ".$h2s ." second";
 
$horas_sumadas= $h1." + ". $hora2;
$text=date('H:i:s', strtotime($horas_sumadas)) ;
return $text;
 
}
echo sumar("05:20:00","05:20:30");
?>
