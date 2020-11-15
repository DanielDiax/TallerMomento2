<?php 

class BaseDatos{

//atributos
public $usuarioBD="root";
public $passwordBD="";

//constructor
public function __construct(){}


//metodos
public function conectarBD(){

    try{
    
        $datosBD="mysql:host=localhost;dbname=frikystore";
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        return($conexionBD);
    
    
    }catch(PDOException $error){

        echo($error->getMessage());

    }
    
}


public function agregarDatos($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Preparar consulta
    $insertarDatos=$conexionBD->prepare($consultaSQL);

    //Ejecutar la consulta
    $resultado=$insertarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("Juego Agregado");
    }else{
        echo("error");
    }


}


public function consultarDatos($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Preparar consulta
    $consultarDatos=$conexionBD->prepare($consultaSQL);

    //Establecer el método de consulta
    $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //Ejecutar la operacion en la BD
    $consultarDatos->execute();

    //Retorne los datos consultados
    return($consultarDatos->fetchAll());



}

public function eliminarDatos($consultaSQL){

    
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Peparar Consulta
    $eliminarDatos=$conexionBD->prepare($consultaSQL);

    //Ejecutar la consulta
    $resultado= $eliminarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("Juego Eliminado");
    }else{
        echo("error");
    }

}

public function editarDatos($consultaSQL){

     //establecer una conexion
     $conexionBD=$this->conectarBD();

     //Peparar Consulta
     $editarDatos=$conexionBD->prepare($consultaSQL);
 
     //Ejecutar la consulta
     $resultado= $editarDatos->execute();
 
     //verifico el resultado
     if($resultado){
         echo("Juego Editado");
     }else{
         echo("error");
     }

}





}





?>