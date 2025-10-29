<!DOCTYPE html>
<html lang="es">
    <!-- Incluimos el encabezado desde la carpeta includes -->
    <!-- Esto inserta el header.php, que contiene la barra de navegación y los enlaces de estilo -->
    <?php include_once 'includes/header.php'; ?>

    <!-- SECTION: Contenido principal de la página Historia -->
    <section class="bg-near-white pv4 ph3">
        <!-- Título principal centrado, color rojo -->
        <h2 class="tc red f2">Historia del Perú</h2>

        <!-- ==============================
             CARRUSEL DE IMÁGENES
             ============================== -->
        <div class="carousel center mw8 br3 shadow-4 mt3">
            <!-- Cada imagen representa una etapa histórica -->
            <img src="img/caral.jpg" alt="Culturas Preincaicas" class="active">
            <img src="img/imperioinca.png" alt="Imperio Incaico">
            <img src="img/conquistaes.jpg" alt="Conquista Española">
            <img src="img/independenciape.jpg" alt="Independencia del Perú">

            <!-- Botones de navegación izquierda y derecha -->
            <button class="btn btn-prev">&#10094;</button> <!-- símbolo “<” -->
            <button class="btn btn-next">&#10095;</button> <!-- símbolo “>” -->
        </div>

        <!-- ==============================
             TEXTO DE CONTENIDO HISTÓRICO
             ============================== -->
        <div class="mw8 center lh-copy mt4">
            <!-- mw8 = ancho máximo, center = centrado, lh-copy = espacio de línea legible -->

            <p class="f4 black-80 tj">
                La historia del <strong>Perú</strong> es una de las más <strong>ricas y fascinantes del mundo</strong>, llena de civilizaciones que marcaron huella en la humanidad.  
                Sus raíces se remontan a culturas milenarias como <strong>Caral</strong>, considerada una de las <strong>civilizaciones más antiguas de América</strong> (alrededor del año <em>3000 a.C.</em>), donde se desarrollaron los primeros avances en arquitectura, agricultura y organización social.
            </p>

            <p class="f4 black-80 tj">
                Con el paso del tiempo, surgieron <strong>culturas preincas notables</strong> como los <strong>Chavín</strong>, <strong>Paracas</strong>, <strong>Moche</strong>, <strong>Nazca</strong>, <strong>Wari</strong> y <strong>Chimú</strong>, que destacaron por su increíble <strong>legado artístico, arquitectónico y agrícola</strong>.  
                Cada una aportó innovaciones únicas: los <em>Nazca</em> con sus enigmáticas líneas, los <em>Moche</em> con su cerámica realista, y los <em>Wari</em> con su avanzada planificación urbana.
            </p>

            <p class="f4 black-80 tj">
                Posteriormente, el <strong>Imperio Inca</strong> alcanzó su máximo esplendor al <strong>unificar gran parte del territorio andino</strong>, formando uno de los imperios más extensos y organizados del mundo antiguo.  
                Su capital, <strong>Cusco</strong>, fue el centro político, religioso y cultural del <em>Tahuantinsuyo</em>, que se extendía desde el sur de Colombia hasta el norte de Chile y Argentina.  
                El sistema incaico destacó por su <strong>economía basada en la reciprocidad</strong>, su red de caminos (<em>Qhapaq Ñan</em>), su arquitectura monumental como <strong>Machu Picchu</strong>, y una administración eficiente sin necesidad de escritura, utilizando los <em>quipus</em> como medio de registro.
            </p>

            <p class="f4 black-80 tj">
                En <strong>1532</strong>, la llegada de los conquistadores españoles liderados por <strong>Francisco Pizarro</strong> marcó el inicio de un nuevo periodo: la <strong>época colonial</strong>.  
                Durante este tiempo, el territorio peruano se convirtió en el <strong>centro del poder virreinal en Sudamérica</strong>, con la fundación del <em>Virreinato del Perú</em> y la expansión de la fe católica.  
                Sin embargo, también se impusieron profundos cambios sociales y culturales que afectaron a las comunidades indígenas.
            </p>

            <p class="f4 black-80 tj">
                Tras casi <strong>tres siglos de dominio español</strong>, el <strong>28 de julio de 1821</strong>, el general <strong>Don José de San Martín</strong> proclamó la <strong>Independencia del Perú</strong> en la ciudad de Lima.  
                Años después, <strong>Simón Bolívar</strong> consolidó la libertad peruana tras vencer a los realistas en las batallas de <em>Junín</em> y <em>Ayacucho</em> (<strong>1824</strong>).
            </p>

            <p class="f4 black-80 tj">
                Desde entonces, el país ha atravesado <strong>diversas etapas de transformación política, económica y social</strong>, enfrentando desafíos como la consolidación de la república, los movimientos reformistas y los procesos de modernización.  
                Hoy, el <strong>Perú moderno</strong> se muestra <strong>orgulloso de su pasado milenario</strong>, de su <strong>diversidad cultural</strong>, y de su papel como <strong>heredero de grandes civilizaciones</strong> que aportaron al desarrollo del continente.
            </p>
        </div>


        <!-- ==============================
             ESTILOS DEL CARRUSEL (CSS)
             ============================== -->
        <style>
            /* Contenedor principal del carrusel */
            .carousel {
                position: relative; /* Permite posicionar los botones dentro */
                width: 100%; /* Ocupa todo el ancho */
                height: 400px; /* Altura fija del carrusel */
                overflow: hidden; /* Oculta partes fuera del área visible */
                background: #000; /* Fondo negro mientras carga */
            }

            /* Imágenes dentro del carrusel */
            .carousel img {
                position: absolute; /* Se superponen unas sobre otras */
                width: 100%;
                height: 100%;
                object-fit: cover; /* Ajusta la imagen sin deformarla */
                opacity: 0; /* Ocultas por defecto */
                transition: opacity 1s ease-in-out; /* Transición suave */
            }

            /* Imagen visible en ese momento */
            .carousel img.active {
                opacity: 1;
                z-index: 1; /* Pone la imagen activa al frente */
            }

            /* Estilo general para los botones del carrusel */
            .btn {
                position: absolute; /* Coloca los botones encima del carrusel */
                top: 50%; /* Centrado vertical */
                transform: translateY(-50%); /* Ajuste fino del centrado */
                background: rgba(255, 255, 255, 0.5); /* Fondo blanco semitransparente */
                border: none;
                padding: 0.5rem 1rem;
                cursor: pointer;
                font-size: 2rem;
                z-index: 2; /* Más arriba que las imágenes */
                border-radius: 0.25rem;
                transition: background 0.3s; /* Efecto al pasar el mouse */
            }

            /* Efecto hover para los botones */
            .btn:hover {
                background: rgba(255, 255, 255, 0.8);
            }

            /* Posición de los botones */
            .btn-prev {
                left: 10px; /* Botón izquierdo */
            }
            .btn-next {
                right: 10px; /* Botón derecho */
            }

            /* Adaptación a pantallas pequeñas */
            @media (max-width: 768px) {
                .carousel {
                    height: 250px; /* Menor altura en móviles */
                }
            }
        </style>

        <!-- ==============================
             SCRIPT DEL CARRUSEL (JS PURO)
             ============================== -->
        <script>
            /* Seleccionamos todas las imágenes y los botones */
            const images = document.querySelectorAll('.carousel img');
            const prevBtn = document.querySelector('.btn-prev');
            const nextBtn = document.querySelector('.btn-next');
            let current = 0;  // Índice de imagen actual
            let interval;     // Guardará el intervalo de cambio automático

            // Función para mostrar una imagen específica
            function showImage(index) {
                images[current].classList.remove('active'); // Oculta la actual
                images[index].classList.add('active'); // Muestra la nueva
                current = index; // Actualiza el índice actual
            }

            // Avanza a la siguiente imagen
            function nextImage() {
                const next = (current + 1) % images.length; // Si llega al final, regresa al inicio
                showImage(next);
            }

            // Retrocede a la imagen anterior
            function prevImage() {
                const prev = (current - 1 + images.length) % images.length;
                showImage(prev);
            }

            // Inicia el carrusel automático cada 4 segundos
            function startCarousel() {
                interval = setInterval(nextImage, 4000);
            }

            // Detiene el carrusel (por ejemplo, al presionar un botón)
            function stopCarousel() {
                clearInterval(interval);
            }

            // Al hacer clic en el botón anterior
            prevBtn.addEventListener('click', () => {
                stopCarousel();  // Detiene el cambio automático
                prevImage();     // Muestra la anterior
                startCarousel(); // Reinicia el autoavance
            });

            // Al hacer clic en el botón siguiente
            nextBtn.addEventListener('click', () => {
                stopCarousel();
                nextImage();
                startCarousel();
            });

            // Activa el carrusel automáticamente al cargar la página
            startCarousel();
        </script>
    </section>

    <!-- Incluimos el pie de página -->
    <?php include_once 'includes/footer.php'; ?>
</html>