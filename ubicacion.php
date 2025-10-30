<!DOCTYPE html>
<html lang="es">
    <?php include_once 'includes/header.php'; ?>

    <!-- SECCIÓN PRINCIPAL -->
    <section class="pv5 ph4" 
             style="background: linear-gradient(to bottom, #fefefe, #e8f5f7); font-family: 'Poppins', sans-serif;">

        <!-- HERO / ENCABEZADO CON FONDO -->
        <div class="relative tc white pv6 mb5 br3 shadow-4" 

             style="background: url('img/per.jpg') center/cover no-repeat; position: relative;">
            <div style="background-color: rgba(0, 0, 0, 0.45);" class="absolute top-0 left-0 w-100 h-100 br3"></div>
            <div class="relative z-1">
                <h1 class="f1 fw7 mb2 tracked">🌍 Ubicación del Perú</h1>
                <p class="f4 i">Entre montañas, costa y selva... un país lleno de vida y diversidad.</p>
            </div>
        </div>

        <!-- INTRODUCCIÓN -->
        <div class="mw8 center tc">
            <p class="f4 gray mb4 lh-copy">
                El Perú se encuentra en la parte occidental de Sudamérica, limitando con Ecuador, Colombia, Brasil, Bolivia, Chile y el Océano Pacífico.  
                Es uno de los países más diversos del planeta gracias a sus tres regiones naturales: <strong>costa</strong>, <strong>sierra</strong> y <strong>selva</strong>.
            </p>
        </div>

        <!-- MAPA PRINCIPAL -->
        <div class="tc mb5">
            <img src="img/mapap.png" alt="Mapa del Perú" 
                 class="br3 shadow-4 mw5 w-90 grow" 
                 style="transition: transform 0.4s; cursor: pointer;"
                 onclick="window.open('https://www.google.com/maps/place/Perú', '_blank')">
            <p class="f6 gray mt2">Haz clic en el mapa para explorar en Google Maps</p>
        </div>

        <!-- REGIONES NATURALES -->
        <h3 class="tc f2 dark-red mb4">Regiones Naturales del Perú</h3>

        <div class="flex flex-wrap justify-center tc">
            <!-- COSTA -->
            <div class="w-30-l w-90-s pa3 ma2 bg-white br3 shadow-4 grow pointer hover-bg-washed-red animate-fade"
                 onclick="mostrarModalRegion('costa')">
                <img src="img/costap.jpg" alt="Costa peruana" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Costa</h4>
                <p class="gray lh-copy">
                    Zona cálida y moderna junto al océano Pacífico.  
                    Destacan Lima, Trujillo y la exquisita gastronomía marina.
                </p>
            </div>

            <!-- SIERRA -->
            <div class="w-30-l w-90-s pa3 ma2 bg-white br3 shadow-4 grow pointer hover-bg-washed-red animate-fade"
                 onclick="mostrarModalRegion('sierra')">
                <img src="img/sierrap.jpg" alt="Sierra peruana" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Sierra</h4>
                <p class="gray lh-copy">
                    Región andina llena de historia, con paisajes majestuosos como Cusco, Arequipa y Machu Picchu.
                </p>
            </div>

            <!-- SELVA -->
            <div class="w-30-l w-90-s pa3 ma2 bg-white br3 shadow-4 grow pointer hover-bg-washed-red animate-fade"
                 onclick="mostrarModalRegion('selva')">
                <img src="img/selvap.jpg" alt="Selva peruana" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Selva</h4>
                <p class="gray lh-copy">
                    La Amazonía peruana, rica en fauna y flora, con ciudades vibrantes como Iquitos y Tarapoto.
                </p>
            </div>
        </div>


        <!-- MAPA TURÍSTICO -->
        <div class="tc mt6">
            <h3 class="f2 dark-red mb3">🗺️ Mapa Turístico del Perú</h3>
            <p class="f4 gray mb4 lh-copy">
                Conoce los destinos más emblemáticos del Perú, desde las montañas de los Andes hasta la inmensidad de la selva amazónica.
            </p>
            <img src="img/mapaturisticope.jpg" alt="Mapa turístico del Perú" 
                 class="br3 shadow-3 mw5 w-90 grow pointer"
                 onclick="window.location.href = 'turismo.php'">
            <p class="f6 gray mt2">Haz clic para descubrir más destinos turísticos</p>
        </div>

        <!-- DESTINOS IMPERDIBLES -->
        <h3 class="tc f2 dark-red mt5 mb4">Destinos Imperdibles</h3>

        <div class="flex flex-wrap justify-center tc">

            <!-- CUSCO -->
            <div class="w-25-l w-90-s pa3 ma2 bg-white br3 shadow-3 grow pointer hover-bg-washed-red animate-slide"
                 onclick="mostrarModalDestino('cusco')">
                <img src="img/cusco.jpg" alt="Cusco" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Cusco</h4>
                <p class="gray lh-copy">Antigua capital del Tahuantinsuyo. Inicio del viaje hacia Machu Picchu.</p>
            </div>

            <!-- AREQUIPA -->
            <div class="w-25-l w-90-s pa3 ma2 bg-white br3 shadow-3 grow pointer hover-bg-washed-red animate-slide"
                 onclick="mostrarModalDestino('arequipa')">
                <img src="img/arequipa.jpg" alt="Arequipa" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Arequipa</h4>
                <p class="gray lh-copy">La “Ciudad Blanca”, rodeada de volcanes y herencia colonial.</p>
            </div>

            <!-- PUNO -->
            <div class="w-25-l w-90-s pa3 ma2 bg-white br3 shadow-3 grow pointer hover-bg-washed-red animate-slide"
                 onclick="mostrarModalDestino('puno')">
                <img src="img/puno.jpg" alt="Puno" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Puno</h4>
                <p class="gray lh-copy">A orillas del Lago Titicaca, cuna de tradiciones y danzas ancestrales.</p>
            </div>

            <!-- IQUITOS -->
            <div class="w-25-l w-90-s pa3 ma2 bg-white br3 shadow-3 grow pointer hover-bg-washed-red animate-slide"
                 onclick="mostrarModalDestino('iquitos')">
                <img src="img/iquitos.png" alt="Iquitos" class="br3 h5 w-100 object-cover">
                <h4 class="dark-red mt3">Iquitos</h4>
                <p class="gray lh-copy">Capital amazónica del Perú, accesible solo por aire o río.</p>
            </div>
        </div>

        <!-- MODAL DE DESTINOS -->
        <div id="modalDestino" class="fixed top-0 left-0 w-100 h-100 bg-black-60 items-center justify-center dn">>
            <div class="bg-white br3 pa4 mw6 relative shadow-5">
                <button class="absolute top-1 right-1 bn bg-transparent f3 dark-red pointer" onclick="cerrarModalDestino()">✖</button>
                <h3 id="tituloDestino" class="dark-red"></h3>
                <img id="imagenDestino" src="" alt="" class="br3 w-100 h5 object-cover mb3">
                <p id="descripcionDestino" class="lh-copy gray"></p>
                <a id="linkDestino" href="#" target="_blank" class="link dark-red b mt3 dib">Ver más información →</a>
            </div>
        </div>

        <!-- SCRIPT DEL MODAL -->
        <script>
            const destinos = {
                cusco: {
                    titulo: 'Cusco',
                    imagen: 'img/cusco.jpg',
                    descripcion: 'Cusco fue la capital del Imperio Inca y hoy es el punto de partida hacia Machu Picchu. Su arquitectura colonial e incaica la convierten en un museo vivo.',
                    link: 'https://www.peru.travel/es/destinos/cusco'
                },
                arequipa: {
                    titulo: 'Arequipa',
                    imagen: 'img/arequipa.jpg',
                    descripcion: 'La “Ciudad Blanca” destaca por sus construcciones en sillar y su majestuoso volcán Misti. Es Patrimonio Cultural de la Humanidad.',
                    link: 'https://www.peru.travel/es/destinos/arequipa'
                },
                puno: {
                    titulo: 'Puno',
                    imagen: 'img/puno.jpg',
                    descripcion: 'Puno se ubica a orillas del Lago Titicaca, el lago navegable más alto del mundo. Es cuna de tradiciones y folklore andino.',
                    link: 'https://www.peru.travel/es/destinos/puno'
                },
                iquitos: {
                    titulo: 'Iquitos',
                    imagen: 'img/iquitos.png',
                    descripcion: 'Iquitos es la puerta de entrada a la Amazonía peruana. Solo se puede acceder por aire o río, lo que la hace un destino único y exótico.',
                    link: 'https://www.peru.travel/es/destinos/iquitos'
                }
            };

            function mostrarModalDestino(destino) {
                const modal = document.getElementById('modalDestino');
                document.getElementById('tituloDestino').textContent = destinos[destino].titulo;
                document.getElementById('imagenDestino').src = destinos[destino].imagen;
                document.getElementById('descripcionDestino').textContent = destinos[destino].descripcion;
                document.getElementById('linkDestino').href = destinos[destino].link;
                modal.classList.remove('dn');
                modal.classList.add('flex');
            }

            function cerrarModalDestino() {
                const modal = document.getElementById('modalDestino');
                modal.classList.add('dn');
                modal.classList.remove('flex');
            }
        </script>

        <!-- PEQUEÑAS ANIMACIONES -->
        <style>
            .animate-slide {
                animation: slideUp 1s ease-out;
            }
            @keyframes slideUp {
                from {
                    transform: translateY(20px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
        </style>


        <!-- FRASE FINAL -->
        <div class="tc mt6 bg-dark-red white pv4 br3 shadow-3 w-80 center">
            <p class="f4">“Desde la costa hasta la selva, el Perú vibra en cada rincón.” 🇵🇪</p>
        </div>
    </section>

    <?php include_once 'includes/footer.php'; ?>

    <!-- PEQUEÑAS ANIMACIONES CSS -->
    <style>
        .animate-fade {
            animation: fadeIn 1s ease-in;
        }
        .animate-slide {
            animation: slideUp 1s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

</html>