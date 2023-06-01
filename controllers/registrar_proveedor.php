<?php
require '../model/conexion.php';

$tipo_documento = $_POST['tipo_documento'];
$numero_id = $_POST['numero_id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$nombre_contacto = $_POST['nombre_contacto'];
$celular = $_POST['celular'];

$sql = "INSERT INTO proveedor(tipo_documento,numero_id,nombre,direccion,nombre_contacto,celular) VALUES ('$tipo_documento','$numero_id','$nombre','$direccion','$nombre_contacto','$celular')";

if($conn ->query($sql) == TRUE){
    echo "<script>
            alert('Proveedor Registrado');
            window.location= '../views/consulta_proveedor.php'
</script>";
}else{
echo "error:" .$sql ."<br>". $connect_error;
}

$conn->close();
?>