<?php

namespace App;

class Propiedad {

    protected static $db;

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorid;

    public function __construct( $args = [])
    {

        $this->id = $args['id']  ?? '' ;
        $this->titulo = $args['titulo']  ?? '' ;
        $this->precio = $args['precio']  ?? '' ;
        $this->imagen = $args['imagen']  ?? '' ;
        $this->descripcion = $args['descripcion']  ?? '' ;
        $this->habitaciones = $args['habitaciones']  ?? '' ;
        $this->wc = $args['wc']  ?? '' ;
        $this->estacionamiento = $args['estacionamiento']  ?? '' ;
        $this->creado = date('Y/m/d');
        $this->vendedorid = $args['vendedorid']  ?? '' ;
      
    }

    public function guardar(){

        echo "Guardando en la base de datos"; 

        
        $query = "INSERT INTO propiedades(titulo, imagen ,descripcion , precio , habitaciones , wc, estacionamiento, creado , vendedorid) VALUES ('$this->titulo' , '$this->imagen' ,'$this->descripcion' , '$this->precio' , '$this->habitaciones' , '$this->wc' ,'$this->estacionamiento', '$this->creado' ,'$this->vendedorid')";

         $resultado = self::$db->query($query); 

         debuguear($resultado);

    }

    public static function setDB($database){
        
        self::$db = $database;
    
    }

}