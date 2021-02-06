<?php 

$conexion = new mysqli("localhost", "root", "", "proyecto");

//Para comprobar la conexión
if($conexion -> connect_errno)
{
	printf("Conexion fallida:", $conexion ->connect_error); //imprime el error conexion
    exit();
}
?>