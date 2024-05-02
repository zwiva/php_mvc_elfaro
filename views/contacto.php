<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

<?php require_once 'shared/navbar.php' ?>

<!-- formulario contacto -->
<aside class="" id="contact">
    <div class="is-flex is-justify-content-center is-flex-direction-column main__contact m-5">

        <div class="m-5">
            <h2 class="is-size-4 has-text-primary has-text-weight-bold">Contáctese con nosotros</h2>
        </div>

        <form style="margin-bottom: 1em;" action="index.php?c=main&a=guardacontacto" method="post">
            <div class="m-3">
                <label for="clientname">Su nombre: </label>
                <input type="text" name="clientname" autofocus required id="clientname" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="email">Email: </label>
                <input type="text" name="clientemail" required id="clientemail" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="clientmsg">Mensaje: </label>
                <input type="text" name="clientmsg" required id="clientmsg" style="width:100%;">
            </div>
            <div class="is-flex is-justify-content-center m-3">
                <input id="btn" type="submit" class="button is-primary" />
            </div>
        </form>
    </div>
</aside>

<?php require_once 'shared/footer.php' ?>