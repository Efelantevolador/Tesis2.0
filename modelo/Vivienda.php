<?php
require_once("conexion.php");
class Vivienda{
    private $id_vivienda;
    private $region;
    private $ciudad;
    private $comuna;
    private $calle;
    private $num_calle;

    public function __construct() {
        
    }

    public function setId($id){
        $this->id_vivienda=$id;
    }

    public function getId(){
        return $this->id_vivienda;
    }

    public function setRegion($r){
        $this->region=$r;
    }

    public function getRegion(){
        return $this->region;
    }

    public function setCiudad($c){
        $this->ciudad=$c;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setComuna($c){
        $this->comuna=$c;
    }

    public function getComuna(){
        return $this->comuna;
    }

    public function setCalle($c){
        $this->calle=$c;
    }

    public function getCalle(){
        return $this->calle;
    }

    public function setNum_calle($c){
        $this->num_calle=$c;
    }

    public function getNum_calle(){
        return $this->num_calle;
    }

    public function create_vivienda(){
        $conn=new Conexion();
        $conexion=$conn ->conectar();
        $sql="INSERT INTO vivienda VALUES('','".$this->region."',".$this->ciudad.",'".$this->comuna."',".$this->calle.",'".$this->num_calle."')";
        if ($conexion->query($sql) === TRUE) {
            return "exito";
        } 
        else{
            return $conexion->error;
        }
        $conexion->close();
    }
}
?>