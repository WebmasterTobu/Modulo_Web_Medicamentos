<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Recepcion de Productos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 pt-4">
                <fieldset class="border p-2">
                <legend class="w-auto"><h1>Recepcion de Productos</h1></legend>
                    <form action="../controllers/registrar_recepcion.php" method="post" class="needs-validation">
                        <br>
                            <label for="fecha">Fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control"><br>
                            <label for="hora">Hora:</label>
                            <input type="time" name="hora" class="form-control">
                            <br>
                            <select name="codigo" class="form-select" aria-label="Default select example">
                                <option selected disable>---Seleccione el Producto---</option>
                                <?php
                                
                                include ("../model/conexion.php");
                                $sql=$conn->query("SELECT * FROM producto");
                                while($resultado=$sql->fetch_assoc()){
                                            echo "<option value='".$resultado[codigo]."'>".$resultado['nombre']."</option>";
                                }
                                
                                ?>
                            </select>
                            <br>
                            <select name="numero_id" class="form-select" aria-label="Default select example">
                                <option selected disable>---Seleccione el Proveedor---</option>
                                <?php
                                
                                include ("../model/conexion.php");
                                $sql=$conn->query("SELECT * FROM proveedor");
                                while($resultado=$sql->fetch_assoc()){
                                            echo "<option value='".$resultado[numero_id]."'>".$resultado['nombre']."</option>";
                                }
                                
                                ?>
                            </select><br>
                            <label for="numero_factura">Numero de factura:</label>
                            <input type="text" name="numero_factura" class="form-control"><br>
                            <label for="cantidad">Cantidad:</label>
                            <input type="text" name="cantidad" class="form-control"><br>
                            <label for="lote">Lote:</label>
                            <input type="text" name="lote" class="form-control"><br>
                            <label for="registro_invima">Registro de Invima:</label>
                            <input type="text" name="registro_invima" class="form-control"><br>
                            <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                            <input type="date" name="fecha_vencimiento" class="form-control"><br>
                            <label for="descripcion">Descripcion:</label>
                            <textarea class="form-control" id="" name="descripcion" rows="3"></textarea>
                            <div class="dropdown-divider"></div>
                        <br>
                        <a href="consulta_recepcion.php" class="btn btn-success">Regresar</a>
                        <button type="submit" class="btn btn-success ">Enviar</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>