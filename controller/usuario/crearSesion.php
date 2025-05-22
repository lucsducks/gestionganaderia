<?php
$idusuario = htmlspecialchars($_POST['idusuario'],ENT_QUOTES,'UTF-8');
$usuario = htmlspecialchars($_POST['usuario'],ENT_QUOTES,'UTF-8');
$nombre = htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8');
$apellido = htmlspecialchars($_POST['apellido'],ENT_QUOTES,'UTF-8');
$documento = htmlspecialchars($_POST['documento'],ENT_QUOTES,'UTF-8');
session_start();
$_SESSION['S_IDUSUARIO'] = $idusuario;
$_SESSION['S_USUARIO'] = $usuario;
$_SESSION['S_NOMBRE'] = $nombre;
$_SESSION['S_APELLIDO'] = $apellido;
$_SESSION['S_DOCUMENTO'] = $documento;

?>