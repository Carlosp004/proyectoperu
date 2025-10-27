<!DOCTYPE html>
<html lang="es">
    <?php include_once 'includes/header.php'; ?>

    <section class="bg-near-white pv4 ph3">
        <h2 class="tc red f2">Historia del Perú</h2>

        <!-- Carrusel de imágenes -->
        <div class="carousel center mw8 br3 shadow-4 mt3">
            <img src="img/caral.jpg" alt="Culturas Preincaicas" class="active">
            <img src="img/imperioinca.png" alt="Imperio Incaico">
            <img src="img/conquistaes.jpg" alt="Conquista Española">
            <img src="img/independenciape.jpg" alt="Independencia del Perú">

            <!-- Botones de navegación -->
            <button class="btn btn-prev">&#10094;</button>
            <button class="btn btn-next">&#10095;</button>
        </div>

        <!-- Contenido de la historia -->
        <div class="mw8 center lh-copy mt4">
            <p class="f4 black-80 tj">
                La historia del Perú es una de las más ricas y fascinantes del mundo. Sus raíces se remontan a civilizaciones milenarias como Caral, una de las más antiguas de América, que floreció miles de años antes del Imperio Inca. 
            </p>
            <p class="f4 black-80 tj">
                Con el tiempo, surgieron culturas notables como los Moche, Nazca, Wari y Chimú, que dejaron un legado artístico, arquitectónico y agrícola impresionante. Posteriormente, el Imperio Inca unificó gran parte del territorio andino bajo una organización política, económica y social avanzada, teniendo a Cusco como su capital.
            </p>
            <p class="f4 black-80 tj">
                En 1532, la llegada de los conquistadores españoles liderados por Francisco Pizarro marcó el inicio de un nuevo periodo en la historia peruana, con profundos cambios sociales y culturales. Tras casi tres siglos de dominio colonial, el 28 de julio de 1821 el general Don José de San Martín proclamó la independencia del Perú.
            </p>
            <p class="f4 black-80 tj">
                Desde entonces, el país ha atravesado diferentes etapas de transformación política, económica y social, que han dado forma a la nación moderna que hoy conocemos, orgullosa de su pasado milenario y de su diversidad cultural.
            </p>
        </div>

        <!-- Estilos del carrusel -->
        <style>
            .carousel {
                position: relative;
                width: 100%;
                height: 400px;
                overflow: hidden;
                background: #000;
            }

            .carousel img {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0;
                transition: opacity 1s ease-in-out;
            }

            .carousel img.active {
                opacity: 1;
                z-index: 1;
            }

            .btn {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(255, 255, 255, 0.5);
                border: none;
                padding: 0.5rem 1rem;
                cursor: pointer;
                font-size: 2rem;
                z-index: 2;
                border-radius: 0.25rem;
                transition: background 0.3s;
            }

            .btn:hover {
                background: rgba(255, 255, 255, 0.8);
            }

            .btn-prev {
                left: 10px;
            }
            .btn-next {
                right: 10px;
            }

            @media (max-width: 768px) {
                .carousel {
                    height: 250px;
                }
            }
        </style>

        <!-- Script del carrusel -->
        <script>
            const images = document.querySelectorAll('.carousel img');
            const prevBtn = document.querySelector('.btn-prev');
            const nextBtn = document.querySelector('.btn-next');
            let current = 0;
            let interval;

            function showImage(index) {
                images[current].classList.remove('active');
                images[index].classList.add('active');
                current = index;
            }

            function nextImage() {
                const next = (current + 1) % images.length;
                showImage(next);
            }

            function prevImage() {
                const prev = (current - 1 + images.length) % images.length;
                showImage(prev);
            }

            function startCarousel() {
                interval = setInterval(nextImage, 4000); // cambia cada 4 segundos
            }

            function stopCarousel() {
                clearInterval(interval);
            }

            prevBtn.addEventListener('click', () => {
                stopCarousel();
                prevImage();
                startCarousel();
            });

            nextBtn.addEventListener('click', () => {
                stopCarousel();
                nextImage();
                startCarousel();
            });

            startCarousel();
        </script>
    </section>

    <?php include_once 'includes/footer.php'; ?>
</html>