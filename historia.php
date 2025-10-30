<!DOCTYPE html>
<html lang="es">
    <?php include_once 'includes/header.php'; ?>

    <section style="font-family: 'Poppins', sans-serif; background: #fdfdfd; color: #222;">

        <!-- HERO INICIAL -->
        <div class="relative tc white pv6"
             style="background: url('img/historiaaaperu.jpeg') center/cover no-repeat; position: relative;">
            <div style="background-color: rgba(0,0,0,0.55);" class="absolute top-0 left-0 w-100 h-100"></div>
            <div class="relative z-1">
                <h1 class="f1 fw7 mb2 tracked">🇵🇪 Historia del Perú</h1>
                <p class="f4 i black b">De las culturas milenarias al Perú moderno: una historia que inspira al mundo.</p>
            </div>
        </div>

        <!-- CARRUSEL -->
        <div class="carousel center mw8 br3 shadow-4 mt4">
            <div class="slide">
                <img src="img/caral.jpg" alt="Culturas Preincaicas">
                <div class="caption">🌅 Cultura Caral — La civilización más antigua de América</div>
            </div>
            <div class="slide">
                <img src="img/imperioinca.png" alt="Imperio Incaico">
                <div class="caption">🏔️ Imperio Inca — El esplendor del Tahuantinsuyo</div>
            </div>
            <div class="slide">
                <img src="img/conquistaes.jpg" alt="Conquista Española">
                <div class="caption">⚔️ Conquista Española — El cambio de una era</div>
            </div>
            <div class="slide">
                <img src="img/independenciape.jpg" alt="Independencia del Perú">
                <div class="caption">🎆 Independencia — Nace una nación libre</div>
            </div>
        </div>

        <!-- CONTENIDO HISTÓRICO -->
        <div class="mw8 center lh-copy mt5 pa4 bg-washed-red br3 shadow-5">
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                La historia del <strong>Perú</strong> es una de las más <strong>ricas y fascinantes del mundo</strong>, llena de civilizaciones que marcaron huella en la humanidad.
                Sus raíces se remontan a culturas milenarias como
                <a href="https://es.wikipedia.org/wiki/Caral" target="_blank" class="link dark-red underline-hover"><strong>Caral</strong></a>,
                considerada una de las <strong>civilizaciones más antiguas de América</strong>.
            </p>

            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Surgieron <strong>culturas preincas</strong> como
                <a href="https://es.wikipedia.org/wiki/Cultura_chav%C3%ADn" target="_blank" class="link dark-red underline-hover">Chavín</a>,
                <a href="https://es.wikipedia.org/wiki/Cultura_Moche" target="_blank" class="link dark-red underline-hover">Moche</a> o
                <a href="https://es.wikipedia.org/wiki/Cultura_Nazca" target="_blank" class="link dark-red underline-hover">Nazca</a>,
                que dejaron un legado de <strong>arte, ingeniería y astronomía</strong>.
            </p>

            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Luego llegó el <a href="https://es.wikipedia.org/wiki/Imperio_inca" target="_blank" class="link dark-red underline-hover"><strong>Imperio Inca</strong></a>,
                que <strong>unificó los Andes</strong> y construyó maravillas como Machu Picchu, símbolo eterno del ingenio andino.
            </p>

            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                En 1532, la llegada de los conquistadores españoles liderados por
                <a href="https://es.wikipedia.org/wiki/Francisco_Pizarro" target="_blank" class="link dark-red underline-hover"><strong>Francisco Pizarro</strong></a>
                marcó el inicio del <strong>Virreinato del Perú</strong>, centro del poder español en Sudamérica.
            </p>

            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                El <strong>28 de julio de 1821</strong>,
                <a href="https://es.wikipedia.org/wiki/Jos%C3%A9_de_San_Mart%C3%ADn" target="_blank" class="link dark-red underline-hover"><strong>Don José de San Martín</strong></a>
                proclamó la <strong>Independencia del Perú</strong>, iniciando una nueva etapa de libertad y soberanía.
            </p>

            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Hoy el <strong>Perú moderno</strong> celebra su diversidad y sus raíces ancestrales con orgullo, combinando tradición y progreso.
            </p>
        </div>

        <!-- FRASE FINAL -->
        <div class="tc mt5 bg-dark-red black b pv4 br3 ma4 shadow-3 w-80 center">
            <p class="f4">“El Perú no solo tiene historia, ¡la historia nació aquí!” 🇵🇪</p>
        </div>
    </section>

    <!-- ESTILOS -->
    <style>
        .carousel {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
        }

        .carousel .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            animation: show 20s infinite;
        }

        @keyframes show {
            0%, 20% {
                opacity: 1;
            }
            25%, 100% {
                opacity: 0;
            }
        }

        .carousel .slide:nth-child(1) {
            animation-delay: 0s;
        }
        .carousel .slide:nth-child(2) {
            animation-delay: 5s;
        }
        .carousel .slide:nth-child(3) {
            animation-delay: 10s;
        }
        .carousel .slide:nth-child(4) {
            animation-delay: 15s;
        }

        .carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .caption {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 1.3rem;
            font-weight: 600;
            background: rgba(0, 0, 0, 0.4);
            color: #fff;
            padding: 10px 0;
            text-shadow: 1px 1px 3px #000;
        }

        p {
            transition: all 0.3s ease;
        }
        p:hover {
            transform: scale(1.02);
            background: #fff7cc;
        }
    </style>

    <?php include_once 'includes/footer.php'; ?>
</html>