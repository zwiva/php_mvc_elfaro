<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>
<script src="assets/js/articles.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

    <?php require_once 'shared/navbar.php' ?>

    <div style="width: 70%;">
        <div class="m-5" style="text-align: center;">
            <h2 class="is-size-4 has-text-primary has-text-weight-bold">Agregar nuevo articulo</h2>
        </div>
        <form name="register" style="margin-bottom: 1em;" action="index.php?c=usuario&a=guardaregistrousuario" method="post">
            <div class="m-3">
                <label for="clientrut">Categoría: </label>
                <select type="text" name="clientrut" required id="clientrut" style="width:100%;">
                    <option value="">General</option>
                    <option value="">Deportes</option>
                    <option value="">Negocios</option>
                </select>
            </div>
            <div class="m-3">
                <label for="clientname">Título: </label>
                <input type="text" name="clientname" autofocus required id="clientname" style="width:100%;">
            </div>
            <div class="m-3">
                <label for="clientemail">Descripción: </label>
                <textarea type="text" name="clientemail" required id="clientemail" style="width:100%; min-height: 400px;"></textarea>
            </div>
            <div class="is-flex is-justify-content-center m-3">
                <button id="btn" type="submit" class="button is-primary">Crear</button>
            </div>
        </form>
    </div>


    <?php require_once 'shared/footer.php' ?>