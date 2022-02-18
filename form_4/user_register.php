<?php


var_dump($_REQUEST);


$monts = [
    '01'=>'Enero',
    '02'=>'Febrero',
    '03'=>'Marzo',
    '04'=>'Abril',
    '05'=>'Mayo',
    '06'=>'Junio',
    '07'=>'Julio',
    '08'=>'Agosto',
    '09'=>'Septiembre',
    '10'=>'Octubre',
    '11'=>'Noviembre',
    '12'=>'Diciembre',
];

$dateCompleted  = explode("-",$_REQUEST['date']);


echo "<b>Fecha: </b> " .  $dateCompleted[2]    . " De ". $monts[$dateCompleted[1]]." Del " . $dateCompleted[0] ;


?>