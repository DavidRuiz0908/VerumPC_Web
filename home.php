<?php
    include 'header.php';
?>

<main>
        <!-- Ventana Flotante (Modal) de Promoción -->
    <div class="modal-overlay" id="modal-promocion">
        <div class="modal-contenido">
            <h2 style="color: #00d2ff; margin-bottom: 10px;">¡Mejora tu Setup!</h2>
            <p class="texto-descripcion" style="margin-bottom: 20px;">Regístrate hoy en Verum y obtén <strong>10% de descuento</strong> en tu primer mantenimiento profundo.</p>
            
            <a href="registro.php">
                <button type="button" class="boton-verum" style="width: 100%;">Registrarme Ahora</button>
            </a>
            
            <!-- Este pequeño código onclick oculta la ventana cuando le das clic -->
            <button type="button" class="btn-cerrar" onclick="document.getElementById('modal-promocion').style.display='none'">
                No gracias, ver el sitio
            </button>
        </div>
    </div>
    
    <div class="hero-verum">
        <h1>Maximiza el rendimiento de tu PC</h1>
        <p>En Verum somos especialistas en ensambles a la medida y mantenimiento profundo.
            Desde una limpieza detallada y cambio de pasta térmica, hasta una gestión de cables
            impecable para que tu equipo luzca y funcione como nuevo.
        </p>
    </div>

    <h2 class="centrar-contenido">Servicio Destacado</h2>
    <div class="tarjeta-fondo-verum">
        <img src="https://placehold.co/500x250/333333/00d2ff?text=Ensamble+Verum" alt="Servicio Estelar" width="100%">
        <br><br>
        <h3>Ensamble Gamer Custom</h3>
        <p class="texto-descripcion">
            Deja tu equipo en manos expertas. Incluye limpieza profunda,
            gestión de cables impecable y optimización de rendimiento</p>
        <p class="precio-azul">Desde $800 MXN</p>
        <br>
        <a href="detalle.php">
            <button type="button" class="boton-verum">Ver Detalles</button>
        </a>
    </div>
    <div class="centrar-contenido">            
        <a href= "catalogo.php" >
            <button type="button" class="boton-verum">Ver Catalogo Completo</button>
        </a>
    </div>
</main>

<?php
    include 'footer.php';
?>