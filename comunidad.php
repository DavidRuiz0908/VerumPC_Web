<?php include 'header.php'; ?>

<main style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
    
    <h1 style="color: #00d2ff; text-align: center; margin-bottom: 10px;">Comunidad Verum</h1>
    <p class="texto-descripcion" style="text-align: center; margin-bottom: 30px;">Comparte tu experiencia, dudas o recomendaciones con otros entusiastas del hardware.</p>

    <!-- Formulario para dejar comentario -->
    <div class="tarjeta-fondo-verum" style="padding: 25px; margin-bottom: 30px;">
        <h3 style="color: #E0E0E0; margin-bottom: 15px;">Deja tu opinión</h3>
        
        <label style="color: #8892b0; font-size: 0.9rem;">Tu Nombre:</label>
        <input type="text" id="input-nombre" class="input-verum" placeholder="Ej. Roberto G." style="margin-bottom: 15px;">
        
        <label style="color: #8892b0; font-size: 0.9rem;">Comentario:</label>
        <textarea id="input-comentario" class="input-verum" placeholder="Escribe tu reseña o duda aquí..." style="height: 100px; resize: none; margin-bottom: 15px;"></textarea>
        
        <button type="button" class="boton-verum" style="width: 100%;" onclick="agregarComentario()">Publicar Comentario</button>
    </div>

    <!-- Lista de Comentarios (Dinámica + Estáticos) -->
    <h2 style="color: #E0E0E0; margin-bottom: 20px;">Opiniones de la Comunidad</h2>
    
    <div id="contenedor-comentarios" style="display: flex; flex-direction: column; gap: 15px;">
        
        <!-- Comentario 1 (Estático inicial) -->
        <div class="tarjeta-fondo-verum" style="padding: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <strong style="color: #00d2ff;">Alejandro Treviño</strong>
                <span style="color: #8892b0; font-size: 0.8rem;">Hace 2 días</span>
            </div>
            <p class="texto-descripcion" style="margin: 0;">¡Excelente servicio de mantenimiento! Mi ThinkPad quedó como nueva y el diagnóstico fue rapidísimo.</p>
        </div>

        <!-- Comentario 2 (Estático inicial) -->
        <div class="tarjeta-fondo-verum" style="padding: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <strong style="color: #00d2ff;">Diana Morales</strong>
                <span style="color: #8892b0; font-size: 0.8rem;">Hace 4 días</span>
            </div>
            <p class="texto-descripcion" style="margin: 0;">Me ayudaron a armar mi PC gamer equilibrando muy bien los componentes. 100 recomendados.</p>
        </div>

    </div>

</main>

<script>
    function agregarComentario() {
        const nombreInput = document.getElementById('input-nombre');
        const comentarioInput = document.getElementById('input-comentario');
        const contenedor = document.getElementById('contenedor-comentarios');

        const nombre = nombreInput.value.trim();
        const texto = comentarioInput.value.trim();

        if (nombre === "" || texto === "") {
            alert("Por favor completa ambos campos antes de publicar.");
            return;
        }

        // Crear el elemento HTML del nuevo comentario
        const nuevoDiv = document.createElement('div');
        nuevoDiv.className = 'tarjeta-fondo-verum';
        nuevoDiv.style.padding = '20px';
        nuevoDiv.style.border = '1px solid #00d2ff'; // Un borde sutil para destacar lo nuevo

        nuevoDiv.innerHTML = `
            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <strong style="color: #00d2ff;">${nombre}</strong>
                <span style="color: #25D366; font-size: 0.8rem;">Justo ahora</span>
            </div>
            <p class="texto-descripcion" style="margin: 0;">${texto}</p>
        `;

        // Insertar el nuevo comentario al inicio de la lista
        contenedor.prepend(nuevoDiv);

        // Limpiar las cajas de texto
        nombreInput.value = "";
        comentarioInput.value = "";
    }
</script>

<?php
    include 'footer.php';
?>