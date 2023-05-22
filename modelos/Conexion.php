<?php
//Doc. para establecer la conexion a la bd.
abstract class Conexion{
    public static $conexion = null;
//Creamos la funcion conectar para conectarnos.
    private static function conectar(){
        try{
            //Conectamos la base de datos de informix localmente. 
            self::$conexion = new PDO('informix:host=host.docker.internal; service=9088; database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix'); 
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            // Imprimir error si existen complicaiones.
            echo "Error de conexion de BD";
            echo "<br>";
            echo $e->getMessage();
            exit;
        }
        //regresamos la conexion.
        return self::$conexion;
    }

    //Creamos la funcion ejecutar.
    public static function ejecutar($sql){
        // Conectamos la bd.
        self::conectar();
        //Creamos y ejecutamos la sentencia.
        $sentencia = self::$conexion->prepare($sql);
        $resultado = $sentencia->execute();
        // cerramos la conexion.
        self::$conexion = null;
        return $resultado;
    }


}