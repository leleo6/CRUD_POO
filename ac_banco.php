<?php
/* ---- Carga de datos y registro actual ---- */
// Leer regisro a editar 

include_once 'class/c_banco.php';
$banco = new Banco();
$banco->setCodigo($_POST['codigo']);
$banco->consultar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Banco</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background:#4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer
        }

        button:hover {
            background:#45a049;
        }

        .back-link {
            display: inline-block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none
        }

        .back-link:hover {
            text-decoration: underline
        }
    </style>
    </head>
    <body>
        <div>
                <div class="form-container">
        <h2>Crear Banco</h2>
        <form action="controllers/banco/op_actualizar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre" value="<?= htmlspecialchars($banco->getNombre()) ?>" required>
            </div> 
            <div class="form-group">
                <label for="cod_transaccion">Cod transaccion:</label>
                <input type="text" name="cod_transaccion" id="cod_transaccion" placehoder="Ingrese Cod transaccion" value="<?= htmlspecialchars($banco->getCod_Transaccion()) ?>" required>
            </div> 
            <div class="form-group">
                <label for="created_at">Created at:</label>
                <input type="datetime-local" name="created_at" id="created_id" value="<?= htmlspecialchars($banco->getCreatedAt()) ?>" >
            </div>
            <div class="form-group">
                <label for="updated_at">Updated at:</label>
                <input type="datetime-local" name="updated-at" id="updated_at" value="<?= htmlspecialchars($banco->getUpdatedat()) ?>" >
            </div>
            <div class="form-group">
                <button type="submit">Guardar cambios</button>
                <a href="l_banco.php" class="back-link">Cancelar</a>
            </div>
        </form>
        </div>
    </body>
