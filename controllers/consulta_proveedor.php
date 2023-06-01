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
$sql = "SELECT * FROM proveedor";
$result = $conn->query($sql);

//Resultado de la consulta
if($result->num_rows >0){
  //recorre los registros encontrados y los muestra
  while($row = $result->fetch_assoc()){
    //echo "id:" .$row["id"]. "- Nombres:".$row["nombres"]."- Apellidos".$row["apellidos"]."- Direccion".$row["direccion"]."<br>";

    $tipo_documento=$row["tipo_documento"];
    $numero_id=$row["numero_id"];
    $nombre=$row["nombre"];
    $direccion=$row["direccion"];
    $nombre_contacto=$row["nombre_contacto"];
    $celular=$row["celular"];

    echo "
<tr>
<td >$tipo_documento</td>
<td>$numero_id</td>
<td >$nombre</td>
<td >$direccion</td>
<td >$nombre_contacto</td>
<td>$celular</td>
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