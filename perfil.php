<?php include 'header.php'; ?>

<main>
    <div class="centrar-contenido" style="margin-bottom: 40px;">
        <h1 style="color: #00d2ff; font-size: 2.5rem;">Bienvenido, David Ruiz</h1>
        <p class="texto-descripcion">Gestiona tu información y servicios activos en Verum.</p>
    </div>

    <div class="tarjeta-fondo-verum" style="padding: 30px; margin-bottom: 30px;">
        <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px;">Mis Datos de Contacto</h3>
        
        <p class="texto-descripcion" style="margin-bottom: 10px;"><strong>Usuario:</strong> David Ruiz</p>
        <p class="texto-descripcion" style="margin-bottom: 10px;"><strong>Email:</strong> miperfilverum@gmail.com</p>
        <p class="texto-descripcion" style="margin-bottom: 20px;"><strong>Tel:</strong> 449 345 7611</p>
        
        <a href="editar_datos.php">
            <button type="button" class="boton-verum btn-pequeno">Editar Datos</button>
        </a>      
    </div>
    
    <div class="tarjeta-fondo-verum" style="padding: 30px;">
        <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px;">Historial de Servicios</h3>
        
        <p class="texto-descripcion" style="margin-bottom: 20px;">No tienes órdenes registradas en este momento.</p>
        
        <a href="catalogo.php">
            <button type="button" class="boton-verum btn-pequeno">Explorar Catálogo</button>
        </a> 
    </div>
</main>

<?php include 'footer.php'; ?>