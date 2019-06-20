<script>
    function inicio(){
        window.location="../view/index.php";
    }
    function error(){
        alert("Mail o pass incorrectas");
        window.location="../view/iniciarSesion.php";
    }
</script>
<?php
session_start();
require("../modelo/Postulante.php");
require("../modelo/Vivienda.php");
$p=new Postulante();
$mail;
$pass;
$nombre;
$apepa;
$apema;
$v=new Vivienda();

?>