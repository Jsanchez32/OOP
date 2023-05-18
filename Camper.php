<?php


    class Camper{
        // 1.Declaracionde propiedades con modificador de acceso//
        private $nombre;
        private $email;
        private $cel;

        // 2.Metodo constructor//
        // Alternativamente puedo inicializar con valores parametrizados al constructor//
        public function __construct($nombre,$email,$cel){
            $this->nombre = $nombre;
            $this->email = $email;
            $this->cel = $cel;
        }

        // 3.Method (getters and setters)//
            // get -> se obtienen valores de propiedades//
            // set -> se modifican . setean valores de atributos-propiedades

        public function getNombre(){
            return $this->nombre;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getCel(){
            return $this->cel;
        }

        //Metodos con parametro//
        public function getSaludo($saludo){
            return $saludo . "campus";
        }

        //Metodos Setters//

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setCel($cel){
            $this->cel = $cel;
        }
    }

    //Instanciar clase de variables de instancia//
    $camper = new Camper("Juan","juan@gmai.com",3176017096);
    $camper->setNombre("Raul");
    $camper->setEmail("raul@gmail.com");
    $camper->setCel(31467894233);

    echo $camper->getNombre() ."<br>";
    echo $camper->getEmail() . "<br>";
    echo $camper->getCel() . "<br>";
    echo $camper->getSaludo("Hola ")

?>