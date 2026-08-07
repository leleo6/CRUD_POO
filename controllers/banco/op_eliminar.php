<?php
#Incluir la clase banco
include '../../class/c_banco.php';

#Crear el objeto Banco
$obj = new Banco();

#Establecer la clave primaria para eliminar
$obj->setCodigo($_POST['codigo']);

#Eliminar de la base de datos
$obj->eliminar();

#Redirigir al listado
header("Location: ../../l_banco.php");
?>
