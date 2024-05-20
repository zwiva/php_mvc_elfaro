<!DOCTYPE html>
<html lang="es">

<?php require_once 'shared/head_top.php' ?>

<script src="assets/js/time.js" defer></script>
<script src="assets/js/articles.js" defer></script>

<?php require_once 'shared/head_bottom.php' ?>

<body class="has-background-black-bis">

    <?php require_once 'shared/navbar.php' ?>

    <!-- menu secciones -->
    <section style="display:flex; width: 100%; justify-content:center;">
        <div style="display: flex; flex-wrap:wrap; align-items:center; width: 100%; max-width: 1000px; border: 1px solid var(--bulma-primary); background-color: var(--bulma-primary);">
            <a class="m-0 button is-primary is-small is-responsive" href="#gral">Noticias</a>
            <a class="m-0 button is-primary is-small is-responsive" href="#sprt">Deportes</a>
            <a class="m-0 button is-primary is-small is-responsive" href="#bsn">Negocios</a>
            <a class="m-0 button is-primary is-small is-responsive" href="index.php?c=contacto&a=nuevocontacto">Contáctenos</a>
            <a class="m-0 button is-primary is-small is-responsive" href="index.php?c=usuario&a=nuevoregistrousuario">Regístrese</a>
        </div>
    </section>

    <!-- banner publicidad -->
    <section class="is-flex is-justify-content-center" style="width: 100%; min-height: 60px; background-color: #282828;">
        <div class="is-flex is-justify-content-space-between" style="width: 100%; max-width: 1000px; border: 1px solid rgb(93, 93, 93);">
            Publicidad
        </div>
    </section>

    <!-- icono central -->
    <header style="display: flex; justify-content: center; align-items: center; padding: 4em 0; width: 100%;">
        <img src="https://i.pinimg.com/736x/db/c2/24/dbc224e90d7b2db5d4ee6e828434226e.jpg" style="height: 150px; border-radius: 100%; margin: 0.5em;">
        <div>
            <h1 class="is-size-1 has-text-white has-text-weight-bold">El Far<span class="has-text-danger">o</span></h1>
        </div>
    </header>

    <!-- noticias -->
    <main>

        <!-- formulario nueva noticia -->
        <div class="main__add-article" id="creator" style="margin:1em"></div>

        <!-- secciones -->
        <div class="main__sections">
            <!-- Recientes  -->
            <h2 class="is-size-4 has-text-white has-text-weight-bold has-text-danger ml-4" style="align-self: flex-start;" id="spot">
                + Recientes
            </h2>
            <div class="main__section--spotlight box has-background-black has-text-light">
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">21:40</h5>
                        <h3 class="m-1 has-text-danger">Negocios</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            Pakomio advierte que CNC evalúa acciones legales por dictamen de la Dirección del
                            Trabajo
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/noticias/pais/2024/04/22/pakomio-advierte-que-cnc-evalua-acciones-legales-para-frenar-ley-de-40-horas/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">19:15</h5>
                        <h3 class="m-1 has-text-danger">Noticias</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            Edificio en Santa Isabel sufre fuego estructural en departamento
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/noticias/pais/2024/04/22/pakomio-advierte-que-cnc-evalua-acciones-legales-para-frenar-ley-de-40-horas/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">18:05</h5>
                        <h3 class="m-1 has-text-danger">Noticias</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            SII identifica a más de 600 chilenos con cuentas en el extranjero: tienen US$23 mil
                            millones
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/mercados/2024/04/22/sii-identifica-a-mas-de-600-chilenos-con-cuentas-en-el-extranjero-tienen-us23-mil-millones/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">17:45</h5>
                        <h3 class="m-1 has-text-danger">Negocios</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            Ley de 40 horas: esta semana comienza a regir la nueva jornada laboral de 44 horas
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/datos-utiles/2024/04/22/ley-de-40-horas-esta-semana-comienza-a-regir-la-nueva-jornada-laboral-de-44-horas/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">16:35</h5>
                        <h3 class="m-1 has-text-danger">Negocios</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            Radiografía a una élite empresarial en tensión con La Moneda en la víspera de la Enade 2024
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/el-semanal/2024/04/22/radiografia-a-una-elite-empresarial-en-tension-con-la-moneda-en-la-vispera-de-la-enade-2024/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
                <article class="spotlight__element">
                    <div class="spotlight__element--type">
                        <h5 class="m-1 spotlight__element--hour has-text-white">15:01</h5>
                        <h3 class="m-1 has-text-danger">Noticias</h3>
                    </div>
                    <div class="spotlight__element--content">
                        <p class="m-1 spotlight__element--title has-text-weight-bold">
                            Descubren una bacteria mutante a bordo de la Estación Espacial Internacional
                        </p>
                        <a class="m-1" href="https://www.elmostrador.cl/tendencias/2024/04/22/descubren-una-bacteria-mutante-a-bordo-de-la-estacion-espacial-internacional/">
                            Ir a noticia
                        </a>
                    </div>
                </article>
            </div>

            <!-- Seccion generales -->
            <h2 class="is-size-3 has-text-white has-text-weight-bold has-text-primary" id="gral">Noticias</h2>
            <h6 class="has-text-light m-1"><span id="numgeneral"></span> artículos</h6>
            <div class="main__section box has-background-primary-dark">
                <section class="section__body" id="grlsection">
                    <h2 class="m-2 is-size-5 has-text-weight-bold has-text-light">+ Visto</h2>
                    <!-- Noticia 1 -->
                    <article class="article__body" id="grl1">
                        <div>
                            <h3 class="has-text-white">La comuna de los departamentos vacíos</h3>
                            <h4 class="has-text-primary">DOMINGO</h4>
                            <p class="has-text-light">Cerca de un 40% de los apartamentos en Estación Central están
                                desocupados, según corredores
                                de propiedades. ¿Las razones? Ya nadie quiere arrendar en barrios como Toro Mazotte
                                y
                                Conde
                                del Maule, por la inseguridad que hay en las calles. Una situación que presiona a
                                quienes
                                compraron como inversión y que, ni siquiera ofreciendo rebajas en torno al 20%, los
                                corredores están pudiendo revertir.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/la-tercera-domingo/noticia/la-comuna-de-los-departamentos-vacios/Q5BSXML2D5DBVEIL4XHTBXVC6Q/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1081189640/preview/stock-footage-digital-city-concept-artificial-intelligence-technology-in-smart-city.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1081189640/preview/stock-footage-digital-city-concept-artificial-intelligence-technology-in-smart-city.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/violinista.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body" id="grl2">
                        <div>
                            <h3 class="has-text-white">Cuántos minutos de ejercicio necesitas a diario para evitar
                                el
                                sedentarismo y reducir el
                                riesgo de mortalidad</h3>
                            <h4 class="has-text-primary">TENDENCIAS</h4>
                            <p class="has-text-light">Una investigación reciente concluyó que con este tiempo de actividad
                                física ya tienes
                                beneficios considerables para tu salud. Estos son los detalles. <br>
                                <a target="_blank" href="https://www.latercera.com/tendencias/noticia/cuantos-minutos-de-ejercicio-necesitas-a-diario-para-evitar-el-sedentarismo-y-reducir-el-riesgo-de-mortalidad/6Z3GULE4LRFNDNKTGQPUAWVT6U/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1080319025/preview/stock-footage-abstract-tech-earth-globalization-in-d-motion-graphic-concept-transmit-ai-networking-on-fiber.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1080319025/preview/stock-footage-abstract-tech-earth-globalization-in-d-motion-graphic-concept-transmit-ai-networking-on-fiber.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/bullicio.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 3 -->
                    <article class="article__body" id="grl3">
                        <div>
                            <h3 class="has-text-white">Cómo doblar las sábanas de forma fácil, rápida y perfecta
                            </h3>
                            <h4 class="has-text-primary">PRACTICO</h4>
                            <p class="has-text-light">
                                Lo que para mucha gente resulta un infierno —especialmente la sábana bajera—, en
                                realidad es
                                un arte sencillo de dominar. Y hacerlo correctamente puede cambiarte la vida. Aquí
                                lo
                                explicamos paso a paso. <br>
                                <a target="_blank" href="https://www.latercera.com/practico/noticia/como-doblar-las-sabanas-de-forma-facil-rapida-y-perfecta/35VOL36IURHRXEZ5LMI35VMDC4/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1066143196/preview/stock-footage-happy-hispanic-teen-girl-holding-cell-phone-using-smartphone-device-at-home-smiling-young-latin.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1066143196/preview/stock-footage-happy-hispanic-teen-girl-holding-cell-phone-using-smartphone-device-at-home-smiling-young-latin.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/electricidad.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                </section>
                <section class="section__body--interest" id="grlsection-interest">
                    <h2 class="has-text-primary has-text-weight-bold" style="margin: 0 1em; font-size: 0.8em;">Puede interesarle:</h2>
                    <!-- Noticia 3 -->
                    <article class="article__body--interest notification is-primary-dark" id="grl3">
                        <div>
                            <h3 class="has-text-white">Cómo doblar las sábanas de forma fácil, rápida y perfecta
                            </h3>
                            <h4 class="has-text-primary">PRACTICO</h4>
                            <p class="has-text-white">
                                Lo que para mucha gente resulta un infierno —especialmente la sábana bajera—, en
                                realidad es
                                un arte sencillo de dominar. Y hacerlo correctamente puede cambiarte la vida. Aquí
                                lo
                                explicamos paso a paso. <br>
                                <a target="_blank" href="https://www.latercera.com/practico/noticia/como-doblar-las-sabanas-de-forma-facil-rapida-y-perfecta/35VOL36IURHRXEZ5LMI35VMDC4/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                    </article>
                    <!-- Noticia 1 -->
                    <article class="article__body--interest notification is-primary-dark" id="grl1">
                        <div>
                            <h3 class="has-text-white">La comuna de los departamentos vacíos</h3>
                            <h4 class="has-text-primary">DOMINGO</h4>
                            <p class="has-text-white">Cerca de un 40% de los apartamentos en Estación Central están
                                desocupados, según corredores
                                de propiedades. ¿Las razones? Ya nadie quiere arrendar en barrios como Toro Mazotte
                                y
                                Conde
                                del Maule, por la inseguridad que hay en las calles. Una situación que presiona a
                                quienes
                                compraron como inversión y que, ni siquiera ofreciendo rebajas en torno al 20%, los
                                corredores están pudiendo revertir.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/la-tercera-domingo/noticia/la-comuna-de-los-departamentos-vacios/Q5BSXML2D5DBVEIL4XHTBXVC6Q/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body--interest notification is-primary-dark" id="grl2">
                        <div>
                            <h3 class="has-text-white">Cuántos minutos de ejercicio necesitas a diario para evitar
                                el
                                sedentarismo y reducir el
                                riesgo de mortalidad</h3>
                            <h4 class="has-text-primary">TENDENCIAS</h4>
                            <p class="has-text-white">Una investigación reciente concluyó que con este tiempo de actividad
                                física ya tienes
                                beneficios considerables para tu salud. Estos son los detalles. <br>
                                <a target="_blank" href="https://www.latercera.com/tendencias/noticia/cuantos-minutos-de-ejercicio-necesitas-a-diario-para-evitar-el-sedentarismo-y-reducir-el-riesgo-de-mortalidad/6Z3GULE4LRFNDNKTGQPUAWVT6U/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                </section>
            </div>
            <hr>
            <!-- Seccion deportes -->
            <h2 class="is-size-3 has-text-white has-text-weight-bold has-text-info" id="sprt">Deportes</h2>
            <h6 class="has-text-light m-1"><span id="numsports"></span> artículos</h6>
            <div class="main__section box has-background-info-dark">
                <section class="section__body" id="sprsection">
                    <h2 class="m-2 is-size-5 has-text-weight-bold has-text-light">+ Visto</h2>
                    <!-- Noticia 1 -->
                    <article class="article__body" id="spr1">
                        <div>
                            <h3 class="has-text-white">La histórica rivalidad del fútbol argentino que derribó Javier
                                Altamirano</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-light">La convulsión que sufrió el volante chileno en el partido entre
                                Estudiantes de La Plata y Boca Juniors sigue provocando gestos de apoyo.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/la-historica-rivalidad-del-futbol-argentino-que-derribo-javier-altamirano/C2LEEAJP65DJ3NL26CK6BU2QQU/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1107881453/preview/stock-footage-fiery-soccer-ball-kicked-with-power-at-the-stadium-scoring-a-goal-fiery-soccer-ball-in-goal-with.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1107881453/preview/stock-footage-fiery-soccer-ball-kicked-with-power-at-the-stadium-scoring-a-goal-fiery-soccer-ball-in-goal-with.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/flyby.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body" id="spr2">
                        <div>
                            <h3 class="has-text-white">La pizarra de Tiago Nunes, el nuevo técnico de la UC</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-light">El brasileño debuta este sábado al mediodía, en casa de Huachipato. Un
                                DT que gusta de someter a sus rivales y presionar alto en la cancha. “Su planteamiento
                                descuida mucho el fondo, deja espacios atrás”, advierte Érick Delgado, histórico de
                                Sporting
                                Cristal, el último club que comandó, en Perú.<br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/la-pizarra-de-tiago-nunes-el-nuevo-tecnico-de-la-uc/KVXHYCPUQRB7BO6BCEMM2QUNSE/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1096673017/preview/stock-footage-soccer-player-goal-hand-drawn-sketch-animation-video-football-goal-soccer-playground-background.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1096673017/preview/stock-footage-soccer-player-goal-hand-drawn-sketch-animation-video-football-goal-soccer-playground-background.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/violinista.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 3 -->
                    <article class="article__body" id="spr3">
                        <div>
                            <h3 class="has-text-white">Revelan el fuerte enfrentamiento de Novak Djokovic que terminó
                                con la
                                salida del coach Goran Ivanisevic</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-light">
                                Según el sitio Sporskeeda, el número del tenis tuvo una fuerte discusión con el
                                entrenador
                                croata, después de que el serbio tuvo un pésimo entrenamiento en la disputa de Indian
                                Wells.
                                Fue solo el desenlace de los cambios está haciendo en su staff.<br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/revelan-el-fuerte-enfrentamiento-de-novak-djokovic-que-termino-con-la-salida-del-coach-goran-ivanisevic/54KTCLCCTBALXGS52GHRVRCLVM/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1080013502/preview/stock-footage-beautiful-football-goal-at-world-cup-match-qatar-colors-ball-flies-into-net-on-playground-in-slow.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1080013502/preview/stock-footage-beautiful-football-goal-at-world-cup-match-qatar-colors-ball-flies-into-net-on-playground-in-slow.mp4" type="video/mp4">
                            </video>

                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/gruaMunicipal.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                </section>
                <section class="section__body--interest" id="sprsection">
                    <h2 class="has-text-primary has-text-weight-bold" style="margin: 0 1em; font-size: 0.8em;">Puede interesarle:</h2>
                    <!-- Noticia 3 -->
                    <article class="article__body--interest notification is-primary-dark" id="spr3">
                        <div>
                            <h3 class="has-text-white">Revelan el fuerte enfrentamiento de Novak Djokovic que terminó
                                con la
                                salida del coach Goran Ivanisevic</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-white">
                                Según el sitio Sporskeeda, el número del tenis tuvo una fuerte discusión con el
                                entrenador
                                croata, después de que el serbio tuvo un pésimo entrenamiento en la disputa de Indian
                                Wells.
                                Fue solo el desenlace de los cambios está haciendo en su staff.<br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/revelan-el-fuerte-enfrentamiento-de-novak-djokovic-que-termino-con-la-salida-del-coach-goran-ivanisevic/54KTCLCCTBALXGS52GHRVRCLVM/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body--interest notification is-primary-dark" id="spr2">
                        <div>
                            <h3 class="has-text-white">La pizarra de Tiago Nunes, el nuevo técnico de la UC</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-white">El brasileño debuta este sábado al mediodía, en casa de Huachipato. Un
                                DT que gusta de someter a sus rivales y presionar alto en la cancha. “Su planteamiento
                                descuida mucho el fondo, deja espacios atrás”, advierte Érick Delgado, histórico de
                                Sporting
                                Cristal, el último club que comandó, en Perú.<br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/la-pizarra-de-tiago-nunes-el-nuevo-tecnico-de-la-uc/KVXHYCPUQRB7BO6BCEMM2QUNSE/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                    <!-- Noticia 1 -->
                    <article class="article__body--interest notification is-primary-dark" id="spr1">
                        <div>
                            <h3 class="has-text-white">La histórica rivalidad del fútbol argentino que derribó Javier
                                Altamirano</h3>
                            <h4 class="has-text-primary">DEPORTES</h4>
                            <p class="has-text-white">La convulsión que sufrió el volante chileno en el partido entre
                                Estudiantes de La Plata y Boca Juniors sigue provocando gestos de apoyo.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/el-deportivo/noticia/la-historica-rivalidad-del-futbol-argentino-que-derribo-javier-altamirano/C2LEEAJP65DJ3NL26CK6BU2QQU/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                </section>
            </div>
            <hr>
            <!-- Seccion negocios -->
            <h2 class="is-size-3 has-text-white has-text-weight-bold has-text-info" id="bsn">Negocios</h2>
            <h6 class="has-text-light m-1"><span id="numbusiness"></span> artículos</h6>
            <div class="main__section box has-background-info-dark">
                <section class="section__body" id="bsnsection">
                    <h2 class="m-2 is-size-5 has-text-weight-bold has-text-light">+ Visto</h2>
                    <!-- Noticia 3 -->
                    <article class="article__body" id="bsn3">
                        <div>
                            <h3 class="has-text-white">Disaster Recovery: Una necesidad imperante para las
                                organizaciones
                            </h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-light">
                                La creciente amenaza de los ciberataques hace cada vez más evidente la importancia de
                                que
                                las compañías desarrollen planes para sobreponerse a distintas contingencias. Seguir las
                                normas internacionales y capacitar al personal son parte de las claves para llevarlo a
                                cabo.<br>
                                <a target="_blank" href="https://www.latercera.com/piensa-digital/noticia/disaster-recovery-una-necesidad-imperante-para-las-organizaciones/UAH7O6WRRJHWHF57VXV5BSGUJA/?utm_source=imperdibles&utm_medium=latercera&utm_campaign=editorial">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1076498990/preview/stock-footage-top-down-footage-of-a-busy-corporate-office-with-tow-rows-off-businessmen-and-businesswomen-working.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1076498990/preview/stock-footage-top-down-footage-of-a-busy-corporate-office-with-tow-rows-off-businessmen-and-businesswomen-working.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/bullicio.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 1 -->
                    <article class="article__body" id="bsn1">
                        <div>
                            <h3 class="has-text-white">Programas de emprendimiento Fosis: requisitos y cómo postular
                            </h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-light">Los beneficios que pueden solicitar las personas dependerán de la región
                                y comuna en la que residan, ya que la inscripción estará disponible para los proyectos
                                que
                                se desarrollen en su zona.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/servicios/noticia/programas-de-emprendimiento-fosis-requisitos-y-como-postular/B66C2WILBVDTBGYWS4DOY2SMD4/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1060058060/preview/stock-footage-asia-businessmen-and-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-colleagues.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1060058060/preview/stock-footage-asia-businessmen-and-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-colleagues.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/violinista.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body" id="bsn2">
                        <div>
                            <h3 class="has-text-white">Operación Renta 2024: ¿Cuándo es y quiénes deben realizarla?</h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-light">El proceso, que se lleva a cabo anualmente, no es necesario que sea
                                tramitado por todas las personas, sino que solo por quienes el Servicio de Impuestos
                                Internos indique.<br>
                                <a target="_blank" href="https://www.latercera.com/servicios/noticia/operacion-renta-2024-cuando-es-y-quienes-deben-realizarla/J44WMWCHJVD4DHO5ACLF5YPL4E/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>
                        <div class="article__media">
                            <video class="article__media--video" controls>
                                <source src="https://www.shutterstock.com/shutterstock/videos/1103926799/preview/stock-footage-save-the-planet-earth-global-carbon-offsets-price-report-kpi-co-emission-ai-big-data-global.webm" type="video/webm">
                                <source src="https://www.shutterstock.com/shutterstock/videos/1103926799/preview/stock-footage-save-the-planet-earth-global-carbon-offsets-price-report-kpi-co-emission-ai-big-data-global.mp4" type="video/mp4">
                            </video>
                            <audio class="article__media--audio" controls>
                                <source src="assets/audio/gruaMunicipal.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </article>
                </section>
                <section class="section__body--interest" id="bsnsection">
                    <h2 class="has-text-primary has-text-weight-bold" style="margin: 0 1em; font-size: 0.8em;">Puede interesarle:</h2>
                    <!-- Noticia 1 -->
                    <article class="article__body--interest notification is-primary-dark" id="bsn1">
                        <div>
                            <h3 class="has-text-white">Programas de emprendimiento Fosis: requisitos y cómo postular
                            </h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-white">Los beneficios que pueden solicitar las personas dependerán de la región
                                y comuna en la que residan, ya que la inscripción estará disponible para los proyectos
                                que
                                se desarrollen en su zona.
                                <br>
                                <a target="_blank" href="https://www.latercera.com/servicios/noticia/programas-de-emprendimiento-fosis-requisitos-y-como-postular/B66C2WILBVDTBGYWS4DOY2SMD4/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                    <!-- Noticia 2 -->
                    <article class="article__body--interest notification is-primary-dark" id="bsn2">
                        <div>
                            <h3 class="has-text-white">Operación Renta 2024: ¿Cuándo es y quiénes deben realizarla?</h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-white">El proceso, que se lleva a cabo anualmente, no es necesario que sea
                                tramitado por todas las personas, sino que solo por quienes el Servicio de Impuestos
                                Internos indique.<br>
                                <a target="_blank" href="https://www.latercera.com/servicios/noticia/operacion-renta-2024-cuando-es-y-quienes-deben-realizarla/J44WMWCHJVD4DHO5ACLF5YPL4E/">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                    <!-- Noticia 3 -->
                    <article class="article__body--interest notification is-primary-dark" id="bsn3">
                        <div>
                            <h3 class="has-text-white">Disaster Recovery: Una necesidad imperante para las
                                organizaciones
                            </h3>
                            <h4 class="has-text-primary">NEGOCIOS</h4>
                            <p class="has-text-white">
                                La creciente amenaza de los ciberataques hace cada vez más evidente la importancia de
                                que
                                las compañías desarrollen planes para sobreponerse a distintas contingencias. Seguir las
                                normas internacionales y capacitar al personal son parte de las claves para llevarlo a
                                cabo.<br>
                                <a target="_blank" href="https://www.latercera.com/piensa-digital/noticia/disaster-recovery-una-necesidad-imperante-para-las-organizaciones/UAH7O6WRRJHWHF57VXV5BSGUJA/?utm_source=imperdibles&utm_medium=latercera&utm_campaign=editorial">Ir
                                    a la noticia
                                </a>
                            </p>
                        </div>

                    </article>
                </section>
            </div>
        </div>

    </main>

    <?php require_once 'shared/footer.php' ?>