<?php
if(isset(&_GET['nombre'])){
	$nombre=&_GET['nombre'];
	$correo=&_GET['correo'];

	$conx=mysqli_connect("sql3.freesqldatabase.com","sql3267487","FQhBNgaK1S","sql3267487");
	$sql="INSERT INTO `Cliente` (`Nombre`,`Correo`) VALUES ('$nombre','$correo');";
	$result=mysqli_query($conx,$sql);

	if($result==true){
		echo 1;
	}
}


/*
$nombre = $_GET["nombre"];
$correo = $_GET["correo"];
//$sugerencia = $_GET["sugerencia"];

$server="sql3.freesqldatabase.com";
$user="sql3267487";
$pass="FQhBNgaK1S";
$bd="sql3267487";
$con=new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_errno($con)){
        echo "Failed to connect to MySQL: " .mysqli_connect_error();
    }

$sql="INSERT INTO `Cliente` (Nombre,Correo) VALUES ('$nombre','$correo')";

if(mysqli_query($con,$sql)){
    echo "Se insertaron con exito";
}else{
 echo "No se insertaron los datos";   
}
*/
?>