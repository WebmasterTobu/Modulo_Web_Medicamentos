<?php
// variables de conexion
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "medicamentos";

//creo la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// verifico la conexion
if($conn->connect_error){
  die("Falla de conexion:" .$conn->connect_error);
}

//Realizo la consulta
$sql = "SELECT * FROM recepcion";
$result = $conn->query($sql);

//Resultado de la consulta
if($result->num_rows >0){
  //recorre los registros encontrados y los muestra
  while($row = $result->fetch_assoc()){
    //echo "id:" .$row["id"]. "- Nombres:".$row["nombres"]."- Apellidos".$row["apellidos"]."- Direccion".$row["direccion"]."<br>";

    $fecha=$row["fecha"];
    $hora=$row["hora"];
    $codigo=$row["codigo"];
    $numero_id=$row["numero_id"];
    $numero_factura=$row["numero_factura"];
    $cantidad=$row["cantidad"];
    $lote=$row["lote"];
    $registro_invima=$row["registro_invima"];
    $fecha_vencimiento=$row["fecha_vencimiento"];
    $descripcion=$row["descripcion"];

    echo "
<tr>
<td >$fecha</td>
<td>$hora</td>
<td >$codigo</td>
<td >$numero_id</td>
<td >$numero_factura</td>
<td>$cantidad</td>
<td>$lote</td>
<td>$registro_invima</td>
<td>$fecha_vencimiento</td>
<td>$descripcion</td>
 <td><a href='#' class= 'btn btn-success'><span class='material-icons'>edit</span></a></td>
 <td><a href='#' class='btn btn-success'><span class='material-icons'>delete</span></a></td>
</tr>
";
      }
  }else{
    echo "0 registros";
 
}
$conn->close();
?>