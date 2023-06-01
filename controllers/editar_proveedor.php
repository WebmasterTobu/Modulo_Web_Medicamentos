<?php

include("../model/conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="SELECT * FROM proveedor WHERE id = $id";
    $result= mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            
            $numero_id= $row['numero_id'];
            $nombre= $row['nombre'];
            $direccion= $row['direccion'];
            $nombre_contacto= $row['nombre_contacto'];
            $celular= $row['celular'];
        }
}
    if(isset($_POST['update'])){
        $id= $_GET['id'];
        
        $numero_id= $_POST['numero_id'];
        $nombre= $_POST['nombre'];
        $direccion= $_POST['direccion'];
        $nombre_contacto= $_POST['nombre_contacto'];
        $celular= $_POST['celular'];

        $query="UPDATE proveedor set numero_id='$numero_id',nombre='$nombre',direccion='$direccion',nombre_contacto='$nombre_contacto',celular='$celular' WHERE id= $id";
        mysqli_query($conn,$query);

        $_SESSION['message']= 'Task update Succesfully';
        $_SESSION['message_type']='warning';
        header("location:index.php");
        
    }

?>