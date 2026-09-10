<?php include 'header.php'; ?>

<main>
    <div class="hero-verum">
        <h1 style="color: #00d2ff;">Editar Mis Datos</h1>
        <p class="texto-descripcion">Actualiza tu información de contacto para futuros servicios.</p>
    </div>

    <div class="tarjeta-fondo-verum" style="padding: 30px; margin-bottom: 40px; max-width: 600px;">
        
        <!-- Mensaje de éxito simulado al darle clic en Guardar -->
        <?php if(isset($_GET['estado']) && $_GET['estado'] == 'guardado'): ?>
            <div style="background-color: rgba(0, 210, 255, 0.1); border: 1px solid #00d2ff; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
                <h3 style="color: #00d2ff; margin: 0 0 5px 0;">¡Datos Actualizados!</h3>
                <p class="texto-descripcion" style="margin: 0;">Tu información se ha guardado correctamente.</p>
            </div>
        <?php endif; ?>

        <!-- Formulario de edición -->
        <form action="" method="GET" class="centrar-contenido">
            
            <!-- Input oculto para activar el mensaje de éxito -->
            <input type="hidden" name="estado" value="guardado">

            <div class="agrupar-formularios">
                <label for="nombre">Nombre Completo:</label>
                <!-- El atributo "value" coloca el texto por defecto en la caja -->
                <input type="text" name="nombre" id="nombre" class="input-verum" value="David Ruiz">
            </div>

            <div class="agrupar-formularios">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" class="input-verum" value="miperfilverum@gmail.com">
            </div>

            <div class="agrupar-formularios">
                <label for="telefono">Teléfono (WhatsApp):</label>
                <input type="tel" name="telefono" id="telefono" class="input-verum" value="449 345 7611">
            </div>

            <div class="agrupar-formularios">
                <label for="password">Nueva Contraseña (Opcional):</label>
                <!-- Usamos placeholder aquí porque las contraseñas no se muestran -->
                <input type="password" name="password" id="password" class="input-verum" placeholder="Deja en blanco para no cambiarla">
            </div>

            <button type="submit" class="boton-verum" style="width: 100%; margin-top: 20px; margin-bottom: 20px;">Guardar Cambios</button>
            
            <a href="perfil.php" style="color: #8892b0; text-decoration: underline; font-size: 0.9rem;">Cancelar y volver a Mi Perfil</a>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>


