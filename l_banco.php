<?php
include_once 'class/c_banco.php';

// Crear objeto Banco
$banco= new Banco();

/* ¿Viene búesqueda? */
if (isset($_GET['buscar']) && trim($_GET['buscar']) !== '') {
    $res = $banco->buscar($_GET['buscar']);
} else {
    $res = $banco->listar();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado del Banco</title>
</head>
<body>
    <h2>Listado de Banco</h2>

    <form action="l_banco.php" method="GET">
        <input type="text" name="buscar" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>

    <a href="cr_banco.php">Crear Nuevo</a>

    <table border="1">
        <thead>
            <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Cod transaccion</td>
                <td>Created at</td>
                <td>Updated at</td>
                <td colspan="2">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($res as $registro): ?>
                <tr>
                    <td><?php echo $registro['codigo']; ?></td>
                    <td><?php echo $registro['nombre']; ?></td>
                    <td><?php echo $registro['cod_transaccion']; ?></td>
                    <td><?php echo $registro['created_at']; ?></td>
                    <td><?php echo $registro['updated_at']; ?></td>
                    <td>
                        <form action="ac_banco.php" method=""POST>
                            <input type="hidden" name="codigo" value="<?php echo $registro['codigo']; ?>">
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="controllers/banco/op_eliminar.php" method="POST">
                            <input type="hidden" name="codigo" value="<?php echo $registro['codigo']; ?>">
                            <button type="submit" onclick="return confirm('¿Eliminar registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        <a href="index.php">Volver al Menú</a>
</body>
</html>
