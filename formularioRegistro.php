<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friky Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <hr>
    </header>
    <main>
        <div class="container">
            <form action="registrarProductos.php" method="POST">
                <h1>REGISTRO DE VIDEOJUEGOS</h1>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Consola" name="consola">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                </div>
                <div class="col mt-3">
                        <label class="font-weight-bold">Caratula:</label>
                        <input type="text" class="form-control" placeholder="URL CARATULA" name="caratula">
                </div>
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-info btn-block mt-3" name="botonEnvio">Registrar</button>
            </form>
        </div>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
    <?php

include("BaseDatos.php");

if (isset($_POST["botonEnvio"])){


    //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $consola=$_POST['consola'];
    $presio=$_POST['precio'];
    $caratula=$_POST['caratula'];
    $descripcion=$_POST['descripcion'];

    //copia u objeto de la clase BD
    $transaccion=new BaseDatos();

    //crear consulta
    $consultaSQL="INSERT INTO catalogo(nombre,consola,precio,caratula,descripcion) VALUES ('$nombre','$consola','$precio','$caratula','$descripcion')";

    //llamo al metodo se la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    



}



?>