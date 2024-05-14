<!-- navbar -->
<nav style="display:flex; width: 100%; justify-content:center; border-bottom: 3px solid var(--bulma-primary);">
    <div style="display: flex; width: 100%; max-width: 1000px; justify-content: space-between;">
        <a href="index.php">
            <div class="banner__logo has-text-white">
                <img src="https://i.pinimg.com/736x/db/c2/24/dbc224e90d7b2db5d4ee6e828434226e.jpg" style="height: 40px; align-self: center; border-radius: 100%; margin: 0.5em;">
                <h1 class="is-size-5 has-text-weight-bold">El Far<span class="has-text-danger">o</span></h1>
            </div>
        </a>

        <div class="banner__menu">
            <p class="banner__time has-text-white">
                <span id="date"></span>&nbsp;-&nbsp;<span id="time"></span>&nbsp;
            </p>
            <ul class="banner__menu--items has-text-primary">
                <li class="has-text-weight-bold m-1" style="list-style-type: none;"> <a class="has-text-primary" href="index.php">Inicio</a> </li>
                <li class="has-text-weight-bold m-1" style="list-style-type: none;"> <a class="has-text-primary" href="index.php?c=contacto&a=getContactos"> Contactos </a></li>
                <li class="has-text-weight-bold m-1" style="list-style-type: none;"> <a class="has-text-primary" href="index.php?c=usuario&a=getUsuarios"> Usuarios </a></li>
            </ul>
        </div>
    </div>
</nav>