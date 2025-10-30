<!DOCTYPE html>
<html lang="es">
    <?php include_once 'includes/header.php'; ?>

    <style>
        /* Fondo principal con imagen y superposición oscura */
        .hero {
            background: url('img/machupicchu.jpg') center/cover no-repeat;
            position: relative;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        /* Capa semitransparente para legibilidad */
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        /* Contenido del hero */
        .hero-content {
            position: relative;
            z-index: 1;
            padding: 2rem;
        }

        /* Animaciones suaves */
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Tarjetas del equipo */
        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .team-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
    </style>

    <!-- 🌄 Hero Section -->
    <section class="hero">
        <div class="hero-content fade-in">
            <h1 class="f1 b mb3">Bienvenidos a <span class="dark-red">“Descubre el Perú”</span> 🇵🇪</h1>
            <p class="f3 i white-80 mb4">Explora la historia, cultura y maravillas naturales de nuestro país.</p>
            <a href="historia.php" class="bg-dark-red white ph4 pv3 br-pill link dim f4">Comenzar el viaje</a>
        </div>
    </section>

    <!-- 🧑‍💻 Nuestro equipo -->
    <section class="bg-near-white pv5 ph4">
        <h3 class="tc f2 dark-red mb2">Nuestro Equipo</h3>
        <p class="tc gray mb4">Conoce a los integrantes que hicieron posible este proyecto.</p>
        
        <div class="carousel center mw7 br3 shadow-4 mt3 grow">
            <img src="img/grupo.jpeg" alt=""/>
            
        </div>
        
        <div class="mw8 center flex flex-wrap justify-center">
            <div class="team-card w-30-l w-80-m w-90-s pa3 ma2 bg-white br3 shadow-3 tc">
                <img src="img/Carlos.png" alt="Carlos Chinga" class="br-100 h4 w4 dib ba b--light-gray pa1 mb2">
                <h4 class="dark-red mt2 mb1">Carlos Chinga</h4>
                <p class="gray mb3">Historia, Contacto, Ubicación</p>
                <p class="f6 dark-gray i mt2">Ingeniero Informático en formación en la UNJFSC — 21 años.</p>
            </div>

            <div class="team-card w-30-l w-80-m w-90-s pa3 ma2 bg-white br3 shadow-3 tc">
                <img src="img/Huanca.png" alt="Bernardo Huanca" class="br-100 h4 w4 dib ba b--light-gray pa1 mb2">
                <h4 class="dark-red mt2 mb1">Bernardo Huanca</h4>
                <p class="gray mb3">Turismo, Gastronomía, Festividades</p>
                <p class="f6 dark-gray i mt2">Ingeniero Informático en formación en la UNJFSC — 22 años.</p>
            </div>

            <div class="team-card w-30-l w-80-m w-90-s pa3 ma2 bg-white br3 shadow-3 tc">
                <img src="img/Sergio.png" alt="Sergio Gamarra" class="br-100 h4 w4 dib ba b--light-gray pa1 mb2">
                <h4 class="dark-red mt2 mb1">Sergio Gamarra</h4>
                <p class="gray mb3">Música, Artesanía, Fauna</p>
                <p class="f6 dark-gray i mt2">Ingeniero Informático en formación en la UNJFSC — 22 años.</p>
            </div>
        </div>
    </section>

    <!-- ❤️ Frase final -->
    <section class="bg-dark-red white tc pv4">
        <p class="f3 mb1 pa4">“El Perú no solo se visita, ¡se siente en el alma!” ❤️</p>
        <a href="contacto.php" class="bg-white dark-red b ph4 pv3 br-pill link dim f5">Contáctanos</a>
    </section>

    <?php include_once 'includes/footer.php'; ?>
</html>