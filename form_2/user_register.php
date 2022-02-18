<?php

// foreach( $_REQUEST as $request ){
//     echo $request;
  
// }
// var_dump($_REQUEST);

echo "<h1> DATOS DEL USUARIO   </h1> ";
echo "<b>Codigo:</b>  " . $_REQUEST['code'] ;
echo  "<br>";
echo "<b>Correo Electronico:</b>  " . $_REQUEST['email']  ;
echo  "<br>";
echo "<b>Telefoo: </b> " . $_REQUEST['celphone']  ;
echo  "<br>";
echo "<b>Busqueda: </b> " . $_REQUEST['search']  ;
?>