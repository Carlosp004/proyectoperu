<!DOCTYPE html>
<html>
    <!-- Incluye el encabezado (menú, estilos, librerías de Tachyons, etc.) -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Sección principal de la página de contacto -->
    <section class="pv5 ph4 bg-near-white">
        <!-- Título centrado con color rojo oscuro -->
        <h2 class="tc f1 dark-red mb3">Contáctanos</h2>

        <!-- Subtítulo descriptivo centrado -->
        <p class="tc f4 gray mb5">
            ¿Tienes dudas, sugerencias o deseas saber más sobre el Perú? ¡Estamos para ayudarte!
        </p>

        <!-- Contenedor general que usa Flexbox para organizar dos columnas -->
        <div class="flex flex-wrap justify-center items-start mw8 center">

            <!-- COLUMNA IZQUIERDA: Información de contacto -->
            <div class="w-50-l w-100-m pa3">
                <div class="bg-white pa4 br3 shadow-3">
                    <!-- Título de la sección -->
                    <h3 class="dark-red f3 mb3">Información de contacto</h3>

                    <!-- Datos básicos: dirección, teléfono, correo, horario -->
                    <p class="lh-copy gray mb3">
                        <strong>📍 Dirección:</strong> Av. Los Próceres 123, Huacho, Lima - Perú
                    </p>
                    <p class="lh-copy gray mb3">
                        <strong>📞 Teléfono:</strong> +51 987 654 321
                    </p>
                    <p class="lh-copy gray mb3">
                        <strong>✉️ Correo:</strong> contacto@descubreperu.com
                    </p>
                    <p class="lh-copy gray">
                        <strong>🕒 Horario de atención:</strong><br>
                        Lunes a Viernes: 9:00 a.m. - 6:00 p.m.<br>
                        Sábados: 9:00 a.m. - 1:00 p.m.
                    </p>

                    <!-- Línea divisoria visual -->
                    <hr class="mv4">

                    <!-- Subtítulo para las redes sociales -->
                    <h3 class="dark-red f4 mb2">Síguenos en redes sociales</h3>

                    <!-- Enlaces simulados a redes sociales (iconos representativos) -->
                    <div class="flex justify-start">
                        <a href="#" class="link dim dark-red f3 mh2" title="Web">🌐</a> <!-- Web -->
                        <a href="#" class="link dim dark-red f3 mh2" title="Facebook">📘</a> <!-- Facebook -->
                        <a href="#" class="link dim dark-red f3 mh2" title="Instagram">📷</a> <!-- Instagram -->
                        <a href="#" class="link dim dark-red f3 mh2" title="Twitter">🐦</a> <!-- Twitter -->
                    </div>
                </div>
            </div>

            <!-- COLUMNA DERECHA: Formulario de contacto -->
            <div class="w-50-l w-100-m pa3">
                <div class="bg-white pa4 br3 shadow-3">
                    <!-- Título del formulario -->
                    <h3 class="dark-red f3 mb3">Envíanos un mensaje</h3>

                    <!-- Formulario con método POST (sin acción definida aún) -->
                    <form action="#" method="post" class="tl">

                        <!-- Campo: Nombre -->
                        <label class="db mb2 dark-gray fw6">Nombre completo</label>
                        <input 
                            type="text" 
                            name="nombre" 
                            class="input-reset ba b--light-gray pa2 mb3 w-100 br2" 
                            placeholder="Escribe tu nombre completo" 
                            required
                            >

                        <!-- Campo: Correo -->
                        <label class="db mb2 dark-gray fw6">Correo electrónico</label>
                        <input type="email" name="email" class="input-reset ba b--light-gray pa2 mb3 w-100 br2" 
                            placeholder="tucorreo@ejemplo.com" required>

                        <!-- Campo: Asunto -->
                        <label class="db mb2 dark-gray fw6">Asunto</label>
                        <input 
                            type="text" 
                            name="asunto" 
                            class="input-reset ba b--light-gray pa2 mb3 w-100 br2" 
                            placeholder="Motivo del mensaje" 
                            required
                            >

                        <!-- Campo: Mensaje -->
                        <label class="db mb2 dark-gray fw6">Mensaje</label>
                        <textarea 
                            name="mensaje" 
                            rows="5" 
                            class="input-reset ba b--light-gray pa2 mb4 w-100 br2" 
                            placeholder="Escribe tu mensaje aquí..." 
                            required
                            ></textarea>

                        <!-- Botón de envío -->
                        <button 
                            type="submit" 
                            class="bg-dark-red white br2 pv2 ph4 pointer grow fw6"
                            >
                            Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- SECCIÓN DEL MAPA (opcional pero visualmente útil) -->
        <div class="mt5">
            <!-- Título del mapa -->
            <h3 class="tl f3 dark-red mb3">Encuéntranos aquí</h3>

            <!-- Mapa incrustado de Google Maps centrado en Huacho -->
            <iframe
                class="w-80-l w-100 h5 br3 shadow-3"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.0172032039983!2d-77.5983133!3d-11.1066556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9106d934ed48a007%3A0x6a5b2a0c7358e80b!2sHuacho%2C%20Per%C3%BA!5e0!3m2!1ses-419!2spe!4v1730070000000!5m2!1ses-419!2spe"
                allowfullscreen=""
                loading="lazy"
                ></iframe>
        </div>
    </section>

    <!-- Incluye el pie de página (footer común del sitio) -->
    <?php include_once 'includes/footer.php'; ?>
</html>