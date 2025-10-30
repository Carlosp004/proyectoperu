<!DOCTYPE html>

<html>
    <!-- Incluye el header común desde includes/header.php -->
    <!-- header.php normalmente contiene: <head> (meta, título, links a CSS), apertura <body>, y la barra de navegación -->
    <?php include_once 'includes/header.php'; ?>

    <!-- SECCIÓN: Ubicación / Mapa y destinos -->
    <!-- pv5 = padding vertical grande; ph4 = padding horizontal; bg-near-white = fondo claro -->
    <section class="pv5 ph4 bg-near-white">

        <!-- TÍTULO PRINCIPAL (centrado) -->
        <!-- tc = text-center; f1 = tamaño de fuente grande; dark-red = color -->
        <h2 class="tc f1 dark-red mb3">Ubicación del Perú 🇵🇪</h2>

        <!-- PÁRRAFO INTRODUCTORIO (centrado, con interlineado) -->
        <!-- lh-copy = line-height legible -->
        <p class="tc f4 gray mb4 lh-copy">
            El Perú está situado en la parte occidental de Sudamérica, limitando con Ecuador, Colombia, Brasil, Bolivia, Chile y el Océano Pacífico.  
            Su territorio presenta una gran diversidad de climas y paisajes gracias a sus tres regiones naturales: <strong>costa</strong>, <strong>sierra</strong> y <strong>selva</strong>.
        </p>

        <!-- MAPA PRINCIPAL (imagen) -->
        <!-- tc = centered container; mb5 = margin-bottom -->
        <div class="tc mb5">
            <!-- br3 = border-radius, shadow-2 = sombra suave, mw8 = max-width, w-90 = ancho relativo -->
            <img src="img/mapap.png" alt="Mapa del Perú" class="br3 shadow-2 mw8 w-90">
        </div>

        <!-- SECCIÓN: Regiones Naturales -->
        <h3 class="tc f2 dark-red mb3">Regiones Naturales</h3>

        <!-- Contenedor flexible para 3 columnas (se adaptan en pantallas pequeñas) -->
        <!-- flex flex-wrap justify-center tc -> flexbox, permite wrap y centra el contenido, texto centrado -->
        <div class="flex flex-wrap justify-center tc">

            <!-- COLUMNA 1: COSTA -->
            <!-- w-30-l = 30% en pantallas large, w-100 = 100% en móviles; pa3 = padding -->
            <div class="w-30-l w-100 pa3">
                <!-- Imagen representativa -->
                <!-- grow = efecto ligero al pasar mouse; object-cover para que la imagen llene el cuadro sin deformarse -->
                <img src="img/costap.jpg" alt="Costa peruana" class="br3 grow shadow-2 mw-100 h5 object-cover">
                <!-- Título y descripción -->
                <h4 class="dark-red mt3">Costa</h4>
                <p class="gray lh-copy">
                    Región cálida y árida que bordea el océano Pacífico.  
                    Se caracteriza por su gastronomía y ciudades modernas como Lima y Trujillo.
                </p>
            </div>

            <!-- COLUMNA 2: SIERRA -->
            <div class="w-30-l w-100 pa3">
                <img src="img/sierrap.jpg" alt="Sierra peruana" class="br3 grow shadow-2 mw-100 h5 object-cover">
                <h4 class="dark-red mt3">Sierra</h4>
                <p class="gray lh-copy">
                    Zona andina de montañas y valles, hogar de culturas milenarias.  
                    Aquí se encuentran Cusco, Arequipa y el majestuoso Machu Picchu.
                </p>
            </div>

            <!-- COLUMNA 3: SELVA -->
            <div class="w-30-l w-100 pa3">
                <img src="img/selvap.jpg" alt="Selva peruana" class="br3 grow shadow-2 mw-100 h5 object-cover">
                <h4 class="dark-red mt3">Selva</h4>
                <p class="gray lh-copy">
                    La Amazonía peruana destaca por su biodiversidad y belleza natural.  
                    Lugares como Iquitos y Tarapoto atraen a turistas del mundo entero.
                </p>
            </div>
        </div>

        <!-- MAPA TURÍSTICO: título y breve texto -->
        <h3 class="tc f2 dark-red mt5 mb3">Mapa Turístico del Perú</h3>
        <p class="tc f4 gray mb4 lh-copy">
            Explora los destinos más emblemáticos del Perú, desde los Andes hasta la selva amazónica.  
            Cada rincón guarda historia, cultura y una calidez única en su gente.
        </p>

        <!-- Imagen del mapa turístico -->
        <div class="tc mb5">
            <img src="img/mapaturisticope.jpg" alt="Mapa turístico del Perú" class="br3 shadow-2 mw8 w-90">
        </div>

        <!-- DESTINOS DESTACADOS: cuadrícula responsiva -->
        <div class="flex flex-wrap justify-center tc">
            <!-- Tarjeta 1: Cusco -->
            <!-- w-25-l = 25% en pantallas grandes, w-100 en móviles -->
            <div class="w-25-l w-100 pa3 bg-white br3 shadow-3 ma2">
                <!-- imagen con object-cover para mantener encuadre y h5 = altura fija -->
                <img src="img/cusco.jpg" alt="Cusco" class="br3 grow shadow-1 mw-100 h5">
                <h4 class="dark-red mt3">Cusco</h4>
                <p class="gray lh-copy">Antigua capital del Imperio Inca. Punto de partida hacia Machu Picchu.</p>
            </div>

            <!-- Tarjeta 2: Arequipa -->
            <div class="w-25-l w-100 pa3 bg-white br3 shadow-3 ma2">
                <img src="img/arequipa.jpg" alt="Arequipa" class="br3 grow shadow-1 mw-100 h5 ">
                <h4 class="dark-red mt3">Arequipa</h4>
                <p class="gray lh-copy">La “Ciudad Blanca”, rodeada por volcanes y reconocida por su arquitectura colonial.</p>
            </div>

            <!-- Tarjeta 3: Puno -->
            <div class="w-25-l w-100 pa3 bg-white br3 shadow-3 ma2">
                <img src="img/puno.jpg" alt="Puno" class="br3 grow shadow-1 mw-100 h5 ">
                <h4 class="dark-red mt3">Puno</h4>
                <p class="gray lh-copy">A orillas del lago Titicaca, cuna de danzas, tradiciones y leyendas.</p>
            </div>

            <!-- Tarjeta 4: Iquitos -->
            <div class="w-25-l w-100 pa3 bg-white br3 shadow-3 ma2">
                <img src="img/iquitos.png" alt="Iquitos" class="br3 grow shadow-1 mw-100 h5 ">
                <h4 class="dark-red mt3">Iquitos</h4>
                <p class="gray lh-copy">Capital de la Amazonía peruana, accesible solo por aire o río.</p>
            </div>
        </div>
    </section>

    <!-- Incluye el footer común -->
    <?php include_once 'includes/footer.php'; ?>

</html>