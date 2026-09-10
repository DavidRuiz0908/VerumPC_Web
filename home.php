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
    
    <div class="layout-home">
        
        <!-- Bloque Izquierdo: La Tarjeta Completa -->
        <div class="home-izquierda">
            <h2 class="centrar-contenido">Servicio Destacado</h2>
            
            <!-- Tu tarjeta original (sin la clase layout-dividido) -->
            <div class="tarjeta-fondo-verum" style="margin-top: 15px; max-width: 100%; padding: 30px;">
                <img src="img/pc-gamer.jpg" alt="Servicio Estelar" width="100%" style="border-radius: 8px;">
                <br><br>
                <div>
                    <h3>Ensamble Gamer Custom</h3>
                    <p class="texto-descripcion">
                        Deja tu equipo en manos expertas. Incluye limpieza profunda,
                        gestión de cables impecable y optimización de rendimiento.
                    </p>
                </div>
                <div class="acciones-servicio" style="margin-top: 15px;">
                    <p class="precio-azul">Desde $800 MXN</p>
                    <a href="detalle.php?id=gamer">
                        <button type="button" class="boton-verum">Ver Detalles</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bloque Derecho: Textos de Bienvenida y Botón al Catálogo -->
        <div class="home-derecha">
            <div class="hero-verum" style="text-align: left; padding: 0; margin: 0;">
                <h1 style="font-size: 3rem;">Maximiza el rendimiento de tu PC</h1>
                <p style="font-size: 1.2rem;">
                    En Verum somos especialistas en ensambles a la medida y mantenimiento profundo.
                    Desde una limpieza detallada y cambio de pasta térmica, hasta una gestión de cables
                    impecable para que tu equipo luzca y funcione como nuevo.
                </p>
                <br><br>
                <a href="catalogo.php">
                    <button type="button" class="boton-verum" style="font-size: 1.1rem; padding: 15px 30px;">Ver Catálogo Completo</button>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>