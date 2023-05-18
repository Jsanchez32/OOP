<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

    class Producto{
        private $nombre;
        private $precio;
        private $categoria;
        private $marca;
        private $id;
        private $estado;
        private $descuento;


        public function __construct (){
/*             $this->nombre;
            $this->precio;
            $this->categoria;
            $this->marca;
            $this->id;
            $this->estado;
            $this->descuento; */
        }


        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getID(){
            return $this->id;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function getDescuento(){
            return $this->descuento;
        }



        public function setNombre($nombre){
            return $this->$nombre = $nombre;
        }
        public function setPrecio($precio){
            return $this->$precio = $precio;
        }
        public function setCategoria($categoria){
            return $this->$categoria = $categoria;
        }
        public function setMarca($marca){
            return $this->$marca = $marca;
        }
        public function setId($id){
            return $this->$id =$id;
        }
        public function setEstado($estado){
            return $this->$estado =$estado;
        }
        public function setDescuento($descuento){
            return $this->$descuento =$descuento;
        }
        
        
    }

    $producto1= new Producto();
    $producto2= new Producto();
    $producto3= new Producto();
    $producto4= new Producto();

    echo $producto1->setNombre("Papas")."<br>";
    echo $producto1->setPrecio("5$")."<br>";
    echo $producto1->setCategoria("Alimento")."<br>";
    echo $producto1->setMarca("Margarita")."<br>";

    echo $producto1->getNombre() ."<br>";
    echo $producto1->getPrecio() ."<br>";
    echo $producto1->getCategoria() ."<br>";
    echo $producto1->getMarca() ."<br>";

    echo $producto2->setNombre("Telefono")."<br>";
    echo $producto2->setPrecio("500$")."<br>";
    echo $producto2->setCategoria("Tecnologia")."<br>";
    echo $producto2->setMarca("Xiaomi")."<br>";

    echo "<br>".$producto2->getNombre() ."<br>";
    echo $producto2->getPrecio() ."<br>";
    echo $producto2->getCategoria() ."<br>";
    echo $producto2->getMarca() ."<br>";


    echo $producto3->setNombre("Cama")."<br>";
    echo $producto3->setPrecio("100$")."<br>";
    echo $producto3->setCategoria("Mueble")."<br>";
    echo $producto3->setMarca("HomeCenter")."<br>";


    echo "<br>".$producto3->getNombre() ."<br>";
    echo $producto3->getPrecio() ."<br>";
    echo $producto3->getCategoria() ."<br>";
    echo $producto3->getMarca() ."<br>";

    echo $producto4->setNombre("Churro")."<br>";
    echo $producto4->setPrecio("2$")."<br>";
    echo $producto4->setCategoria("Alimento")."<br>";
    echo $producto4->setMarca("Churros Perez")."<br>";

    echo "<br>".$producto4->getNombre() ."<br>";
    echo $producto4->getPrecio() ."<br>";
    echo $producto4->getCategoria() ."<br>";
    echo $producto4->getMarca() ."<br>";




?>