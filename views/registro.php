<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

    <?php require_once 'shared/navbar.php' ?>

    <div>
        <div class="m-5" style="text-align: center;">
            <h2 class="is-size-4 has-text-primary has-text-weight-bold">Regístrese</h2>
        </div>
        <p class="m-3">Este formulario es para registrarse en el sistema y acceder a secciones exclusivas.</p>
        <form name="register" style="margin-bottom: 1em;" action="index.php?c=usuario&a=guardaregistrousuario" method="post">
            <div class="m-3">
                <label for="clientname">Nombre completo: </label>
                <input type="text" name="clientname" autofocus required id="clientname" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="clientrut">Rut: </label>
                <input type="text" name="clientrut" required id="clientrut" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="clientemail">Email: </label>
                <input type="text" name="clientemail" required id="clientemail" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="clientfono">Telefono: </label>
                <input type="text" name="clientfono" required id="clientfono" style="width:100%;">
            </div>
            <div class="is-flex is-justify-content-center m-3">
                <button id="btn" type="submit" class="button is-primary">Registrarse</button>
            </div>
        </form>
    </div>

    <?php require_once 'shared/footer.php' ?>