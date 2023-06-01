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
$sql = "SELECT * FROM producto";
$result = $conn->query($sql);

//Resultado de la consulta
if($result->num_rows >0){
  //recorre los registros encontrados y los muestra
  while($row = $result->fetch_assoc()){
    //echo "id:" .$row["id"]. "- Nombres:".$row["nombres"]."- Apellidos".$row["apellidos"]."- Direccion".$row["direccion"]."<br>";

    $codigo=$row["codigo"];
    $nombre=$row["nombre"];
    $descripcion=$row["descripcion"];
    $estado=$row["estado"];
    $nombre_laboratorio=$row["nombre_laboratorio"];
    

    echo "
<tr>
<td >$codigo</td>
<td>$nombre</td>
<td >$descripcion</td>
<td >$estado</td>
<td >$nombre_laboratorio</td>
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