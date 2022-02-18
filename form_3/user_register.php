<?php

// foreach( $_REQUEST as $request ){
//     echo $request;
  
// }
echo "<h1> DATOS DEL USUARIO   </h1> ";
$mapGender = [
    'M'=>'Masculino',
    'F'=>'Femenino',
];

$mapHobbies = [
    'hobbie1' => 'Leer',
    'hobbie2' => 'Ir al cine',
    'hobbie3' => 'Ver TV',
    'hobbie4' => 'Jugar',
];


    echo "<b>Genero: </b>". $mapGender[$_REQUEST['gender']];
    echo "<br>";

    $i=0;
    foreach($_REQUEST as $request ){
       
        if($request != "M" && $request!="F" ){ $i++;
            $hobbie = $mapHobbies[$request];
            echo "<br>";
            echo "<b>Hobbie #".$i.": </b>".$hobbie;
        }
            
    }


?>