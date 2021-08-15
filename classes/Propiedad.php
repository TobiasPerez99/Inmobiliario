<?php

namespace App;

class Propiedad {

    protected static $db;
    protected static $columnasDB = ['id','titulo','precio', 'imagen' , 'descripcion', 'habitaciones', 'wc' , 'estacionamiento' , 'creado', 'vendedorid'];

    //Errores 

    protected static $errores = []; 

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

    public static function setDB($database){
        
        self::$db = $database;
    
    }

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

        //sanitizando datos
        $atributos = $this->sanitizarAtributos();

        //insetando en la base de datos
        $query = " INSERT INTO propiedades ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado =self::$db->query($query);

        return $resultado;
    }

    public function atributos(){
        $atributos  = [];

        foreach (self::$columnasDB as $columna){

            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;

        }

        return $atributos;
    }


    public function sanitizarAtributos(){

        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value){

            $sanitizado[$key] = Self::$db->escape_string($value);

        }

        return $sanitizado;

    }
    
    //subida de archivo

    public function setImage($imagen){
        //asignar al tributo de imagen nombre de la imagen 
        
        if($imagen){
            $this->imagen = $imagen;
        }
    }


    //validaciones

    public static function getErrores(){
        return self::$errores;
    }

    public function validar(){


        if (!$this->titulo) {
            self::$errores[] = "Debes agregar un Titulo";
        }
        if (!$this->precio) {
            self::$errores[] = "Debes agregar un Precio";
        }
        if (strlen($this->descripcion) < 1) {
            self::$errores[] = "La descripcion debe ser mayor a 50 caracteres";
        }
        if (!$this->habitaciones) {
            self::$errores[] = "Debes agregar un numero de habitaciones";
        }
        if (!$this->estacionamiento) {
            self::$errores[] = "Debes agregar un numero de estacionamientos";
        }
        if (!$this->wc) {
            self::$errores[] = "Debes agregar un numero de baños";
        }
        if (!$this->titulo) {
            self::$errores[] = "Debes agregar un valor";
        }
        if (!$this->vendedorid) {
            self::$errores[] = "Debes seleccionar un vendedor";
        }
        if(!$this->imagen){
            self::$errores[] = 'La imagen es Obligatoria';
        }
       
        return self::$errores;

    }


}

?>