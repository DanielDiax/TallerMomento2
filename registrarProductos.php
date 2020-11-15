<?php

include('BaseDatos.php');


if(isset($_POST["botonEnvio"])){


    //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $consola=$_POST['consola'];
    $precio=$_POST['precio'];
    $caratula=$_POST['caratula'];
    $descripcion=$_POST['descripcion'];
    //$foto=$_POST['foto'];

    //Copia u objeto de la clase BD
    $transaccion=new BaseDatos();

    //crear consulta
    $consultaSQL="INSERT INTO catalogo(nombre,consola,precio,caratula,descripcion) VALUES ('$nombre','$consola','$precio','$caratula','$descripcion')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    //redireccion
    //header("location:formularioRegistro.php");


    

    


}