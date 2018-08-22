<?php

include("conexion.php");


$nom = $_POST["nom_pqr"];
$cor = $_POST["email_pqr"];
$mov = $_POST["tel_pqr"];
$dir = $_POST["mensj_pqr"];




  $query = "INSERT INTO pqr(	 
  
  nom_pqr,  
  tel_pqr, 
  correo_pqr, 
  mensj_pqr ) VALUES (
  '$nom','$cor','$mov','$dir')";


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