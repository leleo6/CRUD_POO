<?php
# Incluir la clase Banco 
include '../../class/c_banco.php';

#Crear el objeto Banco
$obj = new Banco();

# Establecer la clave primaria para consultar
$obj->setCodigo($_POST['codigo']);

# Consultar el registro existente 
$obj->consultar();

# Establecer los nuevos valores
$obj->setNombre($_POST['nombre']);
$obj->setCod_transaccion($_POST['cod_transaccion']);
$obj->setCreated_at($_POST['created_at']);
$obj->setUpdated_at($_POST['updated_at']);

# Actualizar en la base de datos 
$obj->actualizar();

# Redirigir el listado 
header("Location: ../../l_banco.php");

?>