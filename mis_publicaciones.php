<?php include 'header.php'; ?>

<main style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
    
    <h1 style="color: #00d2ff; text-align: center; margin-bottom: 10px;">Mis Publicaciones C2C</h1>
    <p class="texto-descripcion" style="text-align: center; margin-bottom: 30px;">Gestiona, edita o da de baja el hardware que pusiste a la venta.</p>

    <!-- Contenedor de publicaciones -->
    <div id="lista-publicaciones" style="display: flex; flex-direction: column; gap: 20px;">
        
        <!-- Publicación 1 -->
        <div class="tarjeta-fondo-verum" id="pub-1" style="padding: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div style="flex: 1; min-width: 250px;">
                <h3 style="color: #E0E0E0; margin-bottom: 5px;">Tarjeta Gráfica RTX 3060 Usada</h3>
                <p class="precio-azul" style="margin-bottom: 5px;">$4,500.00 MXN</p>
                <p class="texto-descripcion" style="font-size: 0.9rem; margin: 0;">6 meses de uso, excelente estado, con caja original.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <button type="button" class="boton-verum" style="background-color: #25D366; color: #11141a; padding: 8px 15px;" onclick="simularEditar('pub-1')">Editar</button>
                <button type="button" class="boton-verum" style="background-color: #ff4c4c; color: #fff; padding: 8px 15px;" onclick="simularEliminar('pub-1')">Eliminar</button>
            </div>
        </div>

        <!-- Publicación 2 -->
        <div class="tarjeta-fondo-verum" id="pub-2" style="padding: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div style="flex: 1; min-width: 250px;">
                <h3 style="color: #E0E0E0; margin-bottom: 5px;">Procesador AMD Ryzen 5 3600</h3>
                <p class="precio-azul" style="margin-bottom: 5px;">$2,100.00 MXN</p>
                <p class="texto-descripcion" style="font-size: 0.9rem; margin: 0;">Incluye disipador de stock sin usar.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <button type="button" class="boton-verum" style="background-color: #25D366; color: #11141a; padding: 8px 15px;" onclick="simularEditar('pub-2')">Editar</button>
                <button type="button" class="boton-verum" style="background-color: #ff4c4c; color: #fff; padding: 8px 15px;" onclick="simularEliminar('pub-2')">Eliminar</button>
            </div>
        </div>

    </div>

    <!-- Banner de aviso simulado -->
    <div id="mensaje-aviso" style="display: none; margin-top: 25px; padding: 15px; background-color: rgba(0, 210, 255, 0.1); border: 1px solid #00d2ff; border-radius: 6px; text-align: center;">
        <p id="texto-aviso" style="font-weight: bold; margin: 0;"></p>
    </div>

</main>

<script>
    function simularEliminar(id) {
        if (confirm("¿Estás seguro de eliminar esta publicación de forma simulada?")) {
            const tarjeta = document.getElementById(id);
            tarjeta.style.opacity = "0.3"; // Efecto visual de desvanecimiento
            
            const aviso = document.getElementById('mensaje-aviso');
            const texto = document.getElementById('texto-aviso');
            aviso.style.display = "block";
            texto.style.color = "#ff4c4c";
            texto.innerText = "¡Publicación eliminada con éxito (simulado)!";

            // Removemos el elemento del DOM tras un breve instante
            setTimeout(() => {
                tarjeta.remove();
            }, 600);
        }
    }

    function simularEditar(id) {
        const aviso = document.getElementById('mensaje-aviso');
        const texto = document.getElementById('texto-aviso');
        aviso.style.display = "block";
        texto.style.color = "#00d2ff";
        texto.innerText = "Modo de edición activado para el registro " + id + " (simulado).";
    }
</script>

<?php
    include 'footer.php';
?>