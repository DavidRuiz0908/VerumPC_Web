<?php 
    include 'header.php'; 
    // Revisamos si el usuario llegó aquí con una orden llena
    if (isset($_SESSION['orden']) && !empty($_SESSION['orden'])) {
        
        // Copiamos la orden actual a una nueva variable de historial
        $_SESSION['historial'] = $_SESSION['orden'];
        
        // Vaciamos el carrito (orden) porque ya se "procesó"
        unset($_SESSION['orden']);
    }
?>

<main>
    <div class="hero-verum">
        <h1 style="color: #00d2ff;">Agendar Servicio</h1>
        <p class="texto-descripcion">Estamos preparando nuestra plataforma de agenda y pagos en línea.</p>
    </div>

    <div class="tarjeta-fondo-verum centrar-contenido" style="padding: 60px 30px; margin-bottom: 50px;">
        
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">¡Próximamente!</h2>
        
        <p class="texto-descripcion" style="font-size: 1.1rem; margin-bottom: 40px;">
            Esta función estará disponible en el Bloque 2 del desarrollo. <br>
            Por ahora, puedes seguir explorando nuestros servicios.
        </p>

        <a href="catalogo.php">
            <button type="button" class="boton-verum" style="padding: 12px 30px; font-size: 1.1rem;">← Regresar al Catálogo</button>
        </a>

    </div>
</main>

<?php include 'footer.php'; ?>