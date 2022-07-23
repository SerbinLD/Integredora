<?php
include_once "conexion.php";

$codproducto = $_GET["codigo"];

$sql="DELETE FROM producto WHERE codproducto='$codproducto'";

if (mysqli_query($conn,$sql)){
    
    header("location: admin_inventario.php");

  
}else {
    echo "error al trtar de eliminar un producto:" . mysqli_error($conn);
}

mysqli_close($conn);

?>