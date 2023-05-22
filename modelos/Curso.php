<?php
//Creacion del enlace a el archivo Conexion.php
require 'Conexion.php';

//Creacion de la clase conexion donde tendra todos los atributos necesarios.
class Producto extends Conexion{
    public $nombre_curso;
    public $cantidad_periodos;
    public $modulo_impartido;
    public $nombre_instructor;
    public $creditos_curso;

//Creacion de las funciones y la consulta sql para ingresar datos a la bd.
    public function __construct($args = [] )
    {
        $this->nombre_curso = $args['nombre_curso'] ?? null;
        $this->cantidad_periodos = $args['cantidad_periodos'] ?? '';
        $this->modulo_impartido = $args['modulo_impartido'] ?? '';
        $this->nombre_instructor = $args['nombre_instructor'] ?? '';
        $this->creditos_curso = $args['creditos_curso'] ?? '';

    }

    public function guardar(){
        $sql = "INSERT INTO cursos(nombre_curso, cantidad_periodos, modulo_impartido, nombre_instructor, creditos_curso) values('$this->nombre_curso','$this->cantidad_periodos','$this->modulo_impartido','$this->nombre_instructor','$this->creditos_curso')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
