<script>
    function create_v(){
        alert("Registrado correctamente");
        window.location="../view/index.php";
    }
    function create_f(){
        alert("Este usuario ya está registrado");
        window.location="../view/registrarU.php";
    }
    function create_null(){
        alert("Complete todos los campos");
        window.location="../view/registrarU.php";
    }
</script>
<?php
    require_once("../modelo/Postulante.php");
    require_once("../modelo/Vivienda.php");
    class Postulante_controller Extends Controlador_Base{

        public function __construct() {
            
        }

        public function crear(){
            $p=new Postulante();
            if($p->valida_rut($_POST["rut"])==1){
                $p=$p->getbyId($_POST["rut"]);
                if($p->getRut()==null&&trim($_POST["email"])!=''&&trim($_POST["password"])!=''
                &&trim($_POST["name"])!=''&&trim($_POST["apellidoP"])!=''&&trim($_POST["apellidoM"])!=''
                &&trim($_POST["calle"])!=''&&trim($_POST["ciudad"])!=''&&trim($_POST["comuna"])!=''&&trim($_POST["ncalle"])!=''){
                    $p->setRut($_POST["rut"]);
                    $p->setCorreo($_POST["email"]);
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
                    if($p->create_postulante()=="exito"){
                        echo "<script>create_v()</script>";
                    }
                    else{
                        echo "<script>create_f()</script>";
                    }
                     
                }
                else{
                    echo "<script>create_null()</script>";
                }
            }
        }

    }
?>