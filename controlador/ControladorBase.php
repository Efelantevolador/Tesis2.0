<?php
    require_once("ControllerPrueba.php");
    class Controlador_Base{
        private $controller;
        private $accion;

        public function __construct($c,$a) {
            $this->controller=$c;
            $this->accion=$a;
        }

        public function getController(){
            return $this->controller;
        }

        public function getAccion(){
            return $this->accion;
        }

        public function Ejecutar(){
            $controller=$this->controller;
            $accion=$this->accion;
            $c=new $controller;
            return $c->$accion();
        }
    }

    $prueba=new Controlador_Base("Prueba","saludar");
    echo $prueba->Ejecutar();

?>