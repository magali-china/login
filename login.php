<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario = "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass){
    echo '<script language="javascript">alert("correcto");</script>';
}else{
    echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos");</script>';
}

?>