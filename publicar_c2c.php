<?php include 'header.php'; ?>

<main style="max-width: 600px; margin: 40px auto; padding: 0 20px;">
    
    <h1 style="color: #00d2ff; text-align: center; margin-bottom: 10px;">Publica tu producto Verum</h1>
    <p class="texto-descripcion" style="text-align: center; margin-bottom: 30px;">Pon a la venta tu hardware usado con la comunidad de entusiastas de Verum.</p>

    <!-- Tarjeta del Formulario -->
    <div class="tarjeta-fondo-verum" style="padding: 30px;">
        
        <form id="form-publicar" onsubmit="return simularPublicacion(event)">
            
            <label style="color: #8892b0; font-size: 0.9rem; display: block; margin-bottom: 5px;">Nombre del Componente o Equipo:</label>
            <input type="text" id="c2c-nombre" class="input-verum" placeholder="Ej. Tarjeta Gráfica RTX 3060 Usada" required style="margin-bottom: 20px;">
            
            <label style="color: #8892b0; font-size: 0.9rem; display: block; margin-bottom: 5px;">Precio (MXN):</label>
            <input type="number" id="c2c-precio" class="input-verum" placeholder="Ej. 4500" required style="margin-bottom: 20px;">
            
            <label style="color: #8892b0; font-size: 0.9rem; display: block; margin-bottom: 5px;">Descripción del Estado:</label>
            <textarea id="c2c-descripcion" class="input-verum" placeholder="Detalla tiempo de uso, detalles estéticos o si incluye caja original..." required style="height: 100px; resize: none; margin-bottom: 20px;"></textarea>
            
            <label style="color: #8892b0; font-size: 0.9rem; display: block; margin-bottom: 5px;">Foto del Producto (Simulada):</label>
            <input type="file" id="c2c-foto" class="input-verum" style="padding: 10px; margin-bottom: 25px;">
            
            <button type="submit" class="boton-verum" style="width: 100%;">Publicar Producto</button>
        </form>

        <!-- Mensaje de éxito oculto -->
        <div id="mensaje-exito" style="display: none; margin-top: 20px; padding: 15px; background-color: rgba(37, 211, 102, 0.1); border: 1px solid #25D366; border-radius: 6px; text-align: center;">
            <p style="color: #25D366; font-weight: bold; margin: 0;">¡Producto publicado con éxito!</p>
            <p class="texto-descripcion" style="font-size: 0.85rem; margin: 5px 0 0 0;">Ya aparece disponible en tu sección de gestión personal.</p>
        </div>

    </div>

</main>

<script>
    function simularPublicacion(event) {
        event.preventDefault(); // Evita que recargue la página real

        // Mostramos el aviso visual simulado
        const mensaje = document.getElementById('mensaje-exito');
        mensaje.style.display = 'block';

        // Opcional: Limpiamos el formulario después de publicar
        document.getElementById('form-publicar').reset();

        return false;
    }
</script>

<?php
    include 'footer.php';
?>