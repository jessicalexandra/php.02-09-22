<?php 
if (isset($_REQUEST['codigo']))
{
	$codigo=$_REQUEST['codigo'];
	$cnx =  mysqli_connect("localhost","root","","Empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select codigo from viaje where codigo = '$codigo'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"UPDATE viaje SET activo='no' WHERE codigo = '$codigo'");	
	}
	else
	{
		echo "Usuario No existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar codigo, clave, nombre y correo, respectivamente";
}
?>
