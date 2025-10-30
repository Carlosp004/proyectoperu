<!DOCTYPE html>
<html lang="es">

    <?php include_once 'includes/header.php'; ?>

    <section class="bg-near-white pv4 ph3">
        <!-- Título principal centrado, color rojo -->
        <h2 class="tc red f2">Historia del Perú</h2>

        <!-- CARRUSEL DE IMÁGENES (solo HTML y CSS) -->
        <div class="carousel center mw8 br3 shadow-4 mt3 grow">
            <!-- Cada imagen representa una etapa histórica -->
            <div class="slide"><img src="img/caral.jpg" alt="Culturas Preincaicas"></div>
            <div class="slide"><img src="img/imperioinca.png" alt="Imperio Incaico"></div>
            <div class="slide"><img src="img/conquistaes.jpg" alt="Conquista Española"></div>
            <div class="slide"><img src="img/independenciape.jpg" alt="Independencia del Perú"></div>
        </div>

        <!-- CONTENIDO HISTÓRICO -->
        <!-- 💎 Sección moderna e interactiva de la historia del Perú -->
        <div class="mw8 center lh-copy mt5 pa4 bg-washed-red br3 shadow-4">


            <!-- Párrafo 1 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                La historia del <strong>Perú</strong> es una de las más <strong>ricas y fascinantes del mundo</strong>, llena de civilizaciones que marcaron huella en la humanidad.  
                Sus raíces se remontan a culturas milenarias como 
                <a href="https://es.wikipedia.org/wiki/Caral" target="_blank" class="link dark-red underline-hover"><strong>Caral</strong></a>, 
                considerada una de las <strong>civilizaciones más antiguas de América</strong> (alrededor del año <em>3000 a.C.</em>), donde se desarrollaron los primeros avances en arquitectura, agricultura y organización social.
            </p>

            <!-- Párrafo 2 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Con el paso del tiempo surgieron 
                <strong>culturas preincas notables</strong> como 
                <a href="https://es.wikipedia.org/wiki/Cultura_chav%C3%ADn" target="_blank" class="link dark-red underline-hover">Chavín</a>, 
                <a href="https://es.wikipedia.org/wiki/Cultura_Paracas" target="_blank" class="link dark-red underline-hover">Paracas</a>, 
                <a href="https://es.wikipedia.org/wiki/Cultura_Moche" target="_blank" class="link dark-red underline-hover">Moche</a>, 
                <a href="https://es.wikipedia.org/wiki/L%C3%ADneas_de_Nazca" target="_blank" class="link dark-red underline-hover">Nazca</a>, 
                <a href="https://es.wikipedia.org/wiki/Cultura_Wari" target="_blank" class="link dark-red underline-hover">Wari</a> y 
                <a href="https://es.wikipedia.org/wiki/Cultura_Chim%C3%BA" target="_blank" class="link dark-red underline-hover">Chimú</a>, 
                que destacaron por su increíble <strong>legado artístico, arquitectónico y agrícola</strong>.
            </p>

            <!-- Párrafo 3 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Posteriormente, el 
                <a href="https://es.wikipedia.org/wiki/Imperio_inca" target="_blank" class="link dark-red underline-hover"><strong>Imperio Inca</strong></a> 
                alcanzó su máximo esplendor al <strong>unificar gran parte del territorio andino</strong>, formando uno de los imperios más extensos y organizados del mundo antiguo.  
                Su capital, <strong>Cusco</strong>, fue el centro político, religioso y cultural del <em>Tahuantinsuyo</em>.
            </p>

            <!-- Párrafo 4 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                En <strong>1532</strong>, la llegada de los conquistadores españoles liderados por 
                <a href="https://es.wikipedia.org/wiki/Francisco_Pizarro" target="_blank" class="link dark-red underline-hover"><strong>Francisco Pizarro</strong></a> 
                marcó el inicio de un nuevo periodo: la <strong>época colonial</strong>.  
                Durante este tiempo, el territorio peruano se convirtió en el <strong>centro del poder virreinal en Sudamérica</strong>.
            </p>

            <!-- Párrafo 5 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Tras casi <strong>tres siglos de dominio español</strong>, el 
                <strong>28 de julio de 1821</strong>, el general 
                <a href="https://es.wikipedia.org/wiki/Jos%C3%A9_de_San_Mart%C3%ADn" target="_blank" class="link dark-red underline-hover"><strong>Don José de San Martín</strong></a> 
                proclamó la <strong>Independencia del Perú</strong>.
            </p>

            <!-- Párrafo 6 -->
            <p class="f4 black-80 tj hover-bg-light-yellow pa2 br2 transition-all">
                Hoy, el <strong>Perú moderno</strong> se muestra <strong>orgulloso de su pasado milenario</strong> y su <strong>diversidad cultural</strong>.
            </p>

            
        </div>


        <style>
            /* 🟦 Contenedor principal del carrusel */
            .carousel {
                position: relative;   /* Permite posicionar las imágenes (.slide) de forma absoluta dentro del carrusel */
                width: 100%;          /* Ocupa todo el ancho disponible */
                height: 400px;        /* Altura fija del carrusel */
                overflow: hidden;     /* Oculta las partes de la imagen que sobresalgan del contenedor */
                background: #000;     /* Fondo negro (visible mientras carga la imagen o entre cambios) */
            }

            /* 🟩 Cada imagen dentro del carrusel */
            .carousel .slide {
                position: absolute;   /* Todas las imágenes se apilan unas sobre otras */
                width: 100%;          /* Cada imagen ocupa todo el ancho del carrusel */
                height: 100%;         /* Cada imagen ocupa toda la altura del carrusel */
                opacity: 0;           /* Por defecto, las imágenes están ocultas */
                animation: show 16s infinite; /* Ejecuta la animación “show” en bucle, con duración total de 16 segundos */
                /* 👉 4 imágenes * 4 segundos cada una = 16 segundos */
            }

            /* 🟨 Definición de la animación del carrusel */
            @keyframes show {
                0% {
                    opacity: 1;  /* La imagen comienza visible */
                }
                24.9% {
                    opacity: 1;  /* Se mantiene visible durante el 25% del tiempo total (4 segundos) */
                }
                25% {
                    opacity: 0;  /* En este punto se apaga la imagen instantáneamente (sin transición) */
                }
                100% {
                    opacity: 0;  /* Permanece oculta el resto del ciclo hasta que vuelva a empezar */
                }
            }

            /* 🕓 Asignación de tiempos de retardo (delay) para cada imagen */
            /* Esto hace que las imágenes aparezcan una después de otra, sin superponerse */
            .carousel .slide:nth-child(1) {
                animation-delay: 0s;   /* La primera imagen empieza inmediatamente */
            }
            .carousel .slide:nth-child(2) {
                animation-delay: 4s;   /* La segunda empieza después de 4 segundos */
            }
            .carousel .slide:nth-child(3) {
                animation-delay: 8s;   /* La tercera después de 8 segundos */
            }
            .carousel .slide:nth-child(4) {
                animation-delay: 12s;  /* La cuarta después de 12 segundos */
            }

            /* 🖼️ Estilos de las imágenes dentro del carrusel */
            .carousel img {
                width: 100%;           /* La imagen ocupa todo el ancho del contenedor */
                height: 100%;          /* La imagen ocupa toda la altura del contenedor */
                object-fit: cover;     /* Ajusta la imagen para cubrir el área sin deformarse (recorta bordes si es necesario) */
            }
        </style>

    </section>

    <?php include_once 'includes/footer.php'; ?>

</html>