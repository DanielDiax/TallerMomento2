<?php 

    include("BaseDatos.php");

    //1. Recibo el id que voy a eliminar por la URL(GET)
    $idEliminar=($_GET["id"]);

    //2.crear el objeto de la clase Base Datos
    $transaccion= new BaseDatos();

    //3. Crear la consula SQL para eliminar
    $consultaSQL="DELETE FROM catalogo WHERE idJuego='$idEliminar'";

    //4. Utilizar el metodo para eliminardatos
    $transaccion->eliminarDatos($consultaSQL);





?>