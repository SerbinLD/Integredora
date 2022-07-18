<?php

echo "<h2>Recibiendo informacio del formulario de registro</h2>";

$codigo=$_POST["codigo"];
echo "El codigo del producto escrito es:".$codigo."<br>";
$nombre_de_producto=$_POST["nombre_p"];
echo "El codigo del producto escrito es:".$nombre_de_producto."<br>";
$precio_de_producto=$_POST["precio"];
echo "El codigo del producto escrito es:".$precio_de_producto."<br>";
$cantidad_de_producto=$_POST["cantidad"];
echo "El codigo del producto escrito es:".$cantidad_de_producto."<br>";
// $imagen=$_POST["imagen"];
// echo "El codigo del producto escrito es:".$imagen."<br>";

include("conexion.php");

$sql="INSERT INTO producto VALUE('$codigo','$nombre_de_producto',$precio_de_producto,'$cantidad_de_producto','1')";

//condicion para evaluar si se registro correctamente el producto
if(mysqli_query($conn,$sql))
{
    echo "Producto registrado correctamente";
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}


?>