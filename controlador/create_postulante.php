<script>
    function inicio(){
        alert("Bienvenido");
        window.location="../view/index.php";
    }
    function error(){
        alert("Este correo ya está registrado");
        window.location="../view/registrarU.php";
    }
</script>
<?php
session_start();
require("../modelo/Postulante.php");
require("../modelo/Vivienda.php");
$p=new Postulante();
$p->setCorreo($_POST["email"]);
if($p->getNombre()==null){
    $p->setPass($_POST["password"]);
    $p->setNombre($_POST["name"]);
    $p->setApellido_Paterno($_POST["apellidoP"]);
    $p->setApellido_Materno($_POST["apellidoM"]);
    $p->setFecha_nacimiento($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]);
    $v=new Vivienda();
    $v->setCalle($_POST["calle"]);
    $v->setCiudad($_POST["ciudad"]);
    $v->setComuna($_POST["comuna"]);
    $v->setNum_calle($_POST["ncalle"]);
    $v->setRegion($_POST["region"]);
    $v->create_vivienda();
    $p->setVivienda($v->retornar_id());
    
}
else{
    echo "<script>error()</script>";
}
?>