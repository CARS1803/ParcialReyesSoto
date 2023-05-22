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


}
