<?php 

include("BaseDatos.php");

//1. Crear el objeto de la BD
$transaccion=new BaseDatos();


//2. RECIBIR DATOS
if(isset($_POST["botonEditar"])){

        
    //3. Recibir el id que quiero editar
    $id=$_GET["id"];
    $nombre=$_POST['nombreEditar'];
    $descripcion=$_POST['descEditar'];

    //4.consulta para editar un registro
    $consultaSQL="UPDATE catalogo SET nombre='$nombre',descripcion='$descripcion' WHERE idJuego='$id'";
    

    //5.Utilizar el metodo editar
    $transaccion->editarDatos($consultaSQL);

}








?>