<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

    <?php require_once 'shared/navbar.php' ?>

    <div>
        <div class="m-5" style="text-align: center;">
            <h2 class="is-size-4 has-text-primary has-text-weight-bold">Contactos</h2>
        </div>

        <p class="my-5">Contactos registrados:</p>

        <table>
            <thead>
                <tr>
                    <th class="p-1">Nombre completo</th>
                    <th class="p-1">Email</th>
                    <th class="p-1">Mensaje</th>
                    <th class="p-1">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["contactos"] as $contacto) : ?>
                    <tr>
                        <td class="p-1"><?= $contacto["nombre"] ?></td>
                        <td class="p-1"><?= $contacto["email"] ?></td>
                        <td class="p-1"><?= $contacto["mensaje"] ?></td>
                        <!-- <td class="p-1"><?= $contacto["id_contacto"] ?></td> -->
                        <td class="p-1"><a href='index.php?c=contacto&a=eliminar&id="<?= $contacto['id'] ?>"' class='button is-danger' disabled>Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <?php require_once 'shared/footer.php' ?>