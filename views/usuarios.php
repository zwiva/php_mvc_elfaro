<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

    <?php require_once 'shared/navbar.php' ?>

    <div>
        <div class="m-5" style="text-align: center;">
            <h2 class="is-size-4 has-text-primary has-text-weight-bold">Usuarios</h2>
        </div>

        <p class="m-3">Usuarios registrados:</p>
        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Email</th>
                    <th>Fono</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data["usuarios"] as $usuario) : ?>
                    <tr>
                        <td class="p-1"><?php echo $usuario["nombre"] ?></td>
                        <td class="p-1"><?php echo $usuario["rut"] ?></td>
                        <td class="p-1"><?php echo $usuario["email"] ?></td>
                        <td class="p-1"><?php echo $usuario["fono"] ?></td>
                        <td class="p-1"><?php echo $usuario["id_usuario"] ?></td>
                        <td class="p-1"><a href='index.php?c=usuario&a=updateUsuario&id="<?= $usuario['id'] ?>"' class="button is-warning">Modificar</a></td>
                        <td class="p-1"><a href='index.php?c=usuario&a=eliminar&id="<?= $usuario['id'] ?>"' class='button is-danger'>Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <?php require_once 'shared/footer.php' ?>