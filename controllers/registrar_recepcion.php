<?php
require '../model/conexion.php';

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$codigo = $_POST['codigo'];
$numero_id = $_POST['numero_id'];
$numero_factura = $_POST['numero_factura'];
$cantidad = $_POST['cantidad'];
$lote = $_POST['lote'];
$registro_invima = $_POST['registro_invima'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$descripcion = $_POST['descripcion'];


$sql = "INSERT INTO recepcion(fecha,hora,codigo,numero_id,numero_factura,cantidad,lote,registro_invima,fecha_vencimiento,descripcion) VALUES ('$fecha','$hora','$codigo','$numero_id','$numero_factura','$cantidad','$lote','$registro_invima','$fecha_vencimiento','$descripcion')";

if($conn ->query($sql) == TRUE){
    echo "<script>
            alert('Recepcion Registrada');
            window.location= '../views/consulta_recepcion.php'
</script>";
}else{
echo "error:" .$sql ."<br>". $connect_error;
}

$conn->close();
?>