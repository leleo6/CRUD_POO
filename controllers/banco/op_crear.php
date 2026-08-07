<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    #Incluir la clase Banco
    include '../../class/c_banco.php';

    #Crear el objeto Banco
    $obj = new Banco();

    #Establecer propiedades del objeto
    $obj->setNombre($_POST['nombre']);
    $obj->setCod_transaccion($_POST['cod_transaccion']);
    $obj->setCreated_at($_POST['created_at']);
    $obj->setUpdated_at($_POST['updated_at']);

    #Insertar en la base de datos
    $obj->insertar();

    #Redirigir al listado
    header("Location:../../l_banco.php");
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Metado GET no permitido para crear registros";
} else {
    header("Location:../../index.php");
}
?>