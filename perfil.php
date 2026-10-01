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
        <h3 style="border-bottom: 1px solid #1f2937; padding-bottom: 10px; margin-bottom: 20px;">Mi Última Orden de Servicio</h3>
        
        <!-- Verificamos si hay algo en el historial -->
        <?php if (empty($_SESSION['historial'])): ?>
            
            <p class="texto-descripcion" style="margin-bottom: 20px;">No tienes órdenes registradas en este momento.</p>
            <a href="catalogo.php">
                <button type="button" class="boton-verum btn-pequeno">Explorar Catálogo</button>
            </a> 

        <?php else: ?>

            <?php
                // Reutilizamos tu diccionario para que no salgan los IDs feos
                $datos_servicios = [
                    'entrada'  => 'Gama Entrada / Oficina',
                    'gamer'    => 'Gama Media / PC Gamer',
                    'alta'     => 'Gama Alta / Workstation & AIO',
                    'limpieza' => 'Mantenimiento Profundo',
                    'upgrade'  => 'Upgrade de Velocidad (SSD + RAM)',
                    'cambios'  => 'Cambio Componente Suelto',
                    'cotizar'  => 'Asesoría: Cotización & Compatibilidad'
                ];
            ?>
            
            <div style="margin-bottom: 20px;">
                <?php foreach ($_SESSION['historial'] as $id => $cantidad): ?>
                    <?php if(isset($datos_servicios[$id])): ?>
                        <!-- Diseño de cada servicio en el historial -->
                        <div style="background-color: #11141a; padding: 15px; border-radius: 8px; margin-bottom: 10px; border: 1px solid #1f2937; display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: white; font-weight: bold;"><?php echo $datos_servicios[$id]; ?></span>
                            <span style="color: #00d2ff; background-color: rgba(0, 210, 255, 0.1); padding: 5px 10px; border-radius: 5px;">Equipos: <?php echo $cantidad; ?></span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            
            <!-- Etiqueta visual de estado -->
            <p style="font-size: 0.9rem; color: #25D366; display: flex; align-items: center; gap: 5px;">
                <strong>✓</strong> Orden en proceso de revisión por nuestros técnicos
            </p>

        <?php endif; ?>
    </div>
</main>

<?php include 'footer.php'; ?>