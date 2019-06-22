<script>
    function login_v(){
        alert("Bienvenido");
        window.location="../view/perfil.php";
    }
    function login_f(){
        alert("Este usuario no se encuentra registrado");
        window.location="../view/iniciarSesion.php";
    }
    function inicio(){
        window.location="../view/index.php";
    }
</script>
<?php
session_start();
require_once("../modelo/Postulante.php");
require_once("../modelo/Trabajador.php");
class Usuario_controller Extends Controlador_Base{
    
    public function __construct() {
            
    }

    public function login(){
        $pos=new Postulante();
        $pos->setCorreo($_POST["email"]);
        $pos->setPass($_POST["password"]);
        $pos=$pos->login_postulante();
        $trab=new Trabajador();
        $trab->setMail($_POST["email"]);
        $trab->setPass($_POST["password"]);
        $trab=$trab->login_trabajador();
        if($pos->getNombre()!=null){
            $_SESSION["Postulante"]=$pos;
            echo "<script>login_v()</script>";
        }
        elseif($trab->getNombre()!=null){
            $_SESSION["Trabajador"]=$trab;
            echo "<script>login_v()</script>";
        }
        else{
            echo "<script>login_f()</script>";
        }
    }

    public function cerrar(){
        if(isset($_SESSION["Postulante"])){
            unset($_SESSION["Postulante"]);
        }
        else{
            unset($_SESSION["Trabajador"]);
        }
        echo "<script>inicio()</script>";
    }
}

$x=new Usuario_controller();
$x->cerrar();
?>