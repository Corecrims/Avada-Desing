<?php

include("conexion.php");


$nom = $_POST["p1nombre"];
$cor = $_POST["correo"];
$mov = $_POST["movil"];
$dir = $_POST["direccion"];




if(isset($_POST['btenviar'])){
	$arregloCHK = $_POST["chk1"];
	
	
	$num = count($arregloCHK);
	
	
	for ($n=0; $n<$num; $n++){
		
		echo $arregloCHK ;
	
}

$fin = $arregloCHK;
}
  $query = "INSERT INTO usuarios(	 
  
  nom_usuario,  
  correo_us, 
  movil_us, 
  pass_us, envio_us ) VALUES (
  '$nom','$cor','$mov','$dir','$fin')";


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
	echo "Datos errados o cliente ya esta registrado";
	print "<br/> \n";
	print "<br/> \n";print "<br/> \n";
	print "<br/> \n";
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}





?>