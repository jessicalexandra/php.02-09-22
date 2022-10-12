<?php 
if (isset($_REQUEST['codigo']) && isset($_REQUEST['destino']) && isset($_REQUEST['cantidad']) && isset($_REQUEST['valor']))
{
	$codigo=$_REQUEST['codigo'];
	$cantidad=$_REQUEST['cantidad'];
	$valor=$_REQUEST['valor'];
	$destino=$_REQUEST['destino'];
	$cnx =  mysqli_connect("localhost","root","","Empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select codigo from viaje where codigo = '$codigo'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"UPDATE viaje SET cantidad='$cantidad',valor='$valor',destino='$destino' WHERE codigo = '$codigo'");	
	}
	else
	{
		echo "Usuario No existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar codigo, destino, cantidad y valor, respectivamente";
}
?>
