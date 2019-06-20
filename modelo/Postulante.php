<?php
  require_once("conexion.php");
    class Postulante
    {
      private $rut;
      private $nombre;
      private $apellido_paterno;
      private $apellido_materno;
      private $correo;
      private $pass;
      private $fecha_nacimiento;
      private $telefono;
      private $vivienda;
      private $lista_discapacidad;
    
      public function __construct() {
        
      }
    
      public function setRut($rut)
      {
        $this->rut=$rut;
      }
    
      public function getRut()
      {
        return $this->rut;
      }
    
      public function setNombre($nombre)
      {
        $this->nombre=$nombre;
      }
    
      public function getNombre(){
        return $this->nombre;
      }
    
      public function setApellido_Paterno($apepa){
        $this->apellido_paterno=$apepa;
      }
    
      public function getApellido_Paterno(){
        return $this->apellido_paterno;
      }
    
      public function setApellido_Materno($apema){
        $this->apellido_materno=$apema;
      }
    
      public function getApellido_Materno(){
        return $this->apellido_materno;
      }
    
      public function setCorreo($correo){
        $this->correo=$correo;
      }
    
      public function getCorreo(){
        return $this->correo;
      }
    
      public function setPass($pass){
        $this->pass=$pass;
      }
    
      public function getPass(){
        return $this->pass;
      }
    
      public function setFecha_nacimiento($fecha_nacimiento){
        $this->fecha_nacimiento=$fecha_nacimiento;
      }
    
      public function getFecha_nacimiento(){
        return $this->fecha_nacimiento;
      }
    
      public function setTelefono($telefono){
        $this->telefono=$telefono;
      }
    
      public function getTelefono(){
        return $this->telefono;
      }
    
      public function setVivienda($vivienda){
        $this->vivienda=$vivienda;
      }
    
      public function getVivienda(){
        return $this->vivienda;
      }
    
      public function setLista_discapacidad($lista){
        $this->lista_discapacidad=$lista;
      }
    
      public function getLista_discapacidad(){
        return $this->lista_discapacidad;
      }

      public function login_postulante(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql = "SELECT * FROM postulante WHERE mail='".$this->correo."' AND pass='".$this->pass."'";
        $result = $conexion->query($sql);
        $p=new Postulante();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $p->setApellido_Materno($row["apellido_m"]);
            $p->setApellido_Paterno($row["apellido_p"]);
            $p->setRut($row["id_rut"]);
            $p->setNombre($row["nombre"]);
            $p->setCorreo($row["mail"]);
            $p->setPass($row["pass"]);
            $p->setFecha_nacimiento($row["fecha_nacimiento"]);
            $p->setTelefono($row["telefono"]);
        }
        return $p;
        $conexion->close();
      }

      public function create_postulante(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql= "INSERT INTO postulante VALUES ('','".$this->nombre."','".$this->apellido_materno."','".$this->apellido_paterno."','".$this->correo."','".$this->pass."')";
      }
    }
?>