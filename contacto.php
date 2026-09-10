<?php include 'header.php'; ?>

<main>
    <div class="hero-verum">
        <h1 style="color: #00d2ff;">Comunícate con Nosotros</h1>
        <p class="texto-descripcion">¿Tienes dudas sobre un ensamble o necesitas una cotización? Escríbenos.</p>
    </div>
    
    <div class="tarjeta-fondo-verum" style="padding: 30px; margin-bottom: 40px;">
        
        <!-- Bloque PHP: Si la URL tiene ?estado=enviado, muestra este mensaje verde/cyan -->
        <?php if(isset($_GET['estado']) && $_GET['estado'] == 'enviado'): ?>
            <div style="background-color: rgba(0, 210, 255, 0.1); border: 1px solid #00d2ff; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
                <h3 style="color: #00d2ff; margin: 0 0 5px 0;">¡Mensaje Enviado!</h3>
                <p class="texto-descripcion" style="margin: 0;">Nos pondremos en contacto contigo lo más pronto posible.</p>
            </div>
        <?php endif; ?>

        <!-- El formulario usa GET para mandar la variable a la URL al darle submit -->
        <form action="" method="GET" class="centrar-contenido">
    
            <input type="hidden" name="estado" value="enviado">

            <div class="agrupar-formularios">
                <label for="nombre">Nombre Completo:</label>
                <!-- Se eliminó "required" para permitir el envío vacío -->
                <input type="text" name="nombre" id="nombre" class="input-verum">
            </div>

            <div class="agrupar-formularios">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" class="input-verum">
            </div>

            <div class="agrupar-formularios">
                <label for="mensaje">Detalles de tu equipo o servicio:</label>
                <textarea name="mensaje" id="mensaje" class="input-verum" rows="5" placeholder="Ej. Mi PC se calienta mucho al jugar..."></textarea>
            </div>

            <button type="submit" class="boton-verum" style="width: 100%; margin-top: 10px;">Enviar Mensaje</button>
        </form>
    </div>
    
    <!-- Redes Sociales Convertidas en Botones Flexbox -->
    <div class="centrar-contenido" style="margin-bottom: 50px;">
        <h3 style="margin-bottom: 20px;">Nuestras Redes Verum</h3>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="https://www.instagram.com/verum.pc?utm_source=ig_web_button_share_sheet&igsi=ZDNlZDc0MzIxNw==" target="_blank">
                <button type="button" class="boton-verum" style="background-color: #1f2937; color: white;">Instagram</button>
            </a>
            <a href="https://www.facebook.com/profile.php?id=61592615694768" target="_blank">
                <button type="button" class="boton-verum" style="background-color: #1f2937; color: white;">Facebook</button>
            </a>   
            <a href="#">
                <button type="button" class="boton-verum" style="background-color: #1f2937; color: white;">TikTok</button>
            </a>
            <a href="#">
                <button type="button" class="boton-verum" style="background-color: #25D366; color: #121212;">WhatsApp</button>
            </a> 
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>