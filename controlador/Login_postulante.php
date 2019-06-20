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
$p=new Postulante();
$mail=$_POST["email"];
$pass=$_POST["password"];
$p->setCorreo($mail);
$p->setPass($pass);
$p=$p->login_postulante();
if($p->getNombre()==null){
    echo "<script>error()</script>";
}
else{
    echo "<script>inicio()</script>";
}
?>