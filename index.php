<?php
$h = "3"; //HORAS DO FUSO ((BRASÍLIA = -3) COLOCA-SE SEM O SINAL -).
$hm = $h * 60;
$ms = $hm * 60;
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). DATA
$gmdata = gmdate("d/m/Y", time()-($ms)); 
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). HORA
$gmhora = gmdate("H:i:s", time()-($ms)); 
$today = date("H:i:s");
?>

