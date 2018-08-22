<?php

include("conexion.php");



$cor = $_POST["correo"];

;




  $query = "INSERT INTO correos(	 
  
   
  correo_info 
  ) VALUES (
  '$cor')";


// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Creacion exitosa de Cliente";
	echo "   ";
	print "<br/> \n";
	print "<br/> \n";
	header("Location: index.html" );
	

}
else{
	print "<br/> \n";
	print "<br/> \n";print "<br/> \n";
	print "<br/> \n";print "<br/> \n";
	print "<br/> \n";
	echo "Datos errados, correo existe";
	print "<br/> \n";
	print "<br/> \n";print "<br/> \n";
	print "<br/> \n";
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}





?>