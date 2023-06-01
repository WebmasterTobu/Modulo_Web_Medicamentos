<?php
require '../model/conexion.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$nombre_laboratorio = $_POST['nombre_laboratorio'];


$sql = "INSERT INTO producto(codigo,nombre,descripcion,estado,nombre_laboratorio) VALUES ('$codigo','$nombre','$descripcion','$estado','$nombre_laboratorio')";

if($conn ->query($sql) == TRUE){
    echo "<script>
            alert('Producto Registrado');
            window.location= '../views/consulta_producto.php'
</script>";
}else{
echo "error:" .$sql ."<br>". $connect_error;
}

$conn->close();
?>