<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATALOGO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php  
    
        include('BaseDatos.php');

        //1. Crear un objeto de la clase BaseDatos
        $transaccion=new BaseDatos();

        //2. Definir la consulta para buscar datos
        $consultaSQL="SELECT * FROM catalogo WHERE 1";

        //3. Ejecutar el metodo consultarDatos() 
        // y almacenar la respuesta en una variable
        $catalogo=$transaccion->consultarDatos($consultaSQL);

        //
    ?>

    <main>
    
        <div class="container">
            <h1 class="mt-5 text-center">CATALOGO DE JUEGOS</h1>
            <div class="row row-cols-1 row-cols-md-3 mt-3">

                <?php foreach($catalogo as $catalogo):?>
                    
                    <div class="col mb-4">
                        <div class="card">
                        <img src="<?php echo($catalogo["caratula"])?>" class="card-img-top" alt="CARATULA">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($catalogo["nombre"]) ?></h3>
                                <h3 class="card-title"><?php echo($catalogo["consola"]) ?></h3>
                                <h4 class="card-title"><?php echo($catalogo["precio"]) ?></h4>
                                <p class="card-text"><?php echo($catalogo["descripcion"]) ?></p>
                                <a href="eliminarJuego.php?id=<?php echo($catalogo['idJuego'])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($catalogo["idJuego"])?>">
                                   Editar
                                </button>

                            </div>
                        </div>
                        
                        <div class="modal fade" id="editar<?php echo($catalogo["idJuego"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de Juego</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarJuego.php?id=<?php echo($catalogo["idJuego"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($catalogo["nombre"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($catalogo["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach?>


            </div>
        
        </div>
    
    
    </main>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>