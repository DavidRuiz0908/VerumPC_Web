<?php 
    include 'header.php'; 
    
    // Capturamos el ID de la URL. Si alguien entra sin ID, se asigna 'error'
    $id_servicio = $_GET['id'] ?? 'error'; 
?>

<main>
    <div class="tarjeta-fondo-verum">
        
        <?php if ($id_servicio == 'entrada'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Gama Entrada / Oficina</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$600 MXN</p>
            <br>
            <p class="texto-descripcion">Perfecto para trabajos de ofimática, navegación web y puntos de venta. Ensamblado con componentes de alta durabilidad y eficiencia energética.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Ensamble físico profesional.</li>
                <li>✔ Gestión de cables estándar para facilitar futuros cambios.</li>
                <li>✔ Instalación de Sistema Operativo (Windows 10/11).</li>
                <li>✔ Instalación de Drivers de placa base y paquetería básica.</li>
            </ul>

        <?php elseif ($id_servicio == 'gamer'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Gama Media / PC Gamer</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$1,000 MXN</p>
            <br>
            <p class="texto-descripcion">Diseñado para exprimir cada FPS en títulos AAA y competitivos. Cuidamos el flujo de aire y configuramos la placa base para sacar el máximo rendimiento.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Ensamble con cuidado de flujo de aire (Airflow positivo/negativo).</li>
                <li>✔ Gestión de cables Premium (ocultos en panel trasero).</li>
                <li>✔ Activación de perfiles BIOS XMP/EXPO para máxima velocidad de RAM.</li>
                <li>✔ Curva de ventiladores optimizada para menor ruido.</li>
                <li>✔ Pruebas de estrés térmico básicas (Cinebench / Heaven).</li>
            </ul>

        <?php elseif ($id_servicio == 'alta'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Gama Alta / Workstation & AIO</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$1,500 MXN</p>
            <br>
            <p class="texto-descripcion">El servicio definitivo para equipos de entusiastas, renderizado pesado o simulaciones de red complejas. Máxima atención al detalle y control de temperaturas.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Instalación segura de Refrigeración Líquida (AIO) y radiadores.</li>
                <li>✔ Sincronización y cableado complejo de ecosistemas RGB/ARGB.</li>
                <li>✔ Soporte anti-sag para tarjetas gráficas pesadas (RTX serie 4000/RX 7000).</li>
                <li>✔ Test de estrés térmico prolongado para CPU y GPU.</li>
                <li>✔ Actualización preventiva de BIOS.</li>
            </ul>

        <?php elseif ($id_servicio == 'limpieza'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Mantenimiento Profundo</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$600 MXN</p>
            <br>
            <p class="texto-descripcion">Devuelve tu equipo a sus temperaturas de fábrica. Ideal si tu PC hace mucho ruido, se apaga sola o tiene más de un año sin abrirse.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Desensamble total y sopleteado de polvo en chasis y filtros.</li>
                <li>✔ Limpieza aspa por aspa de ventiladores.</li>
                <li>✔ Cambio de pasta térmica en procesador (fórmula de alto rendimiento).</li>
                <li>✔ Limpieza de contactos en memoria RAM y ranura PCIe.</li>
            </ul>

        <?php elseif ($id_servicio == 'upgrade'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Upgrade de Velocidad (SSD + RAM)</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$400 MXN</p>
            <br>
            <p class="texto-descripcion">La forma más económica de revivir una PC o laptop lenta. Transición fluida a almacenamiento de estado sólido y aumento de memoria para multitarea.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Instalación física de unidad SSD (SATA o NVMe M.2) y módulos RAM.</li>
                <li>✔ Clonación de tu disco duro viejo al nuevo (conservas tus archivos).</li>
                <li>✔ Verificación de Dual-Channel en memorias.</li>
                <li>✔ Optimización de inicio rápido en Windows.</li>
            </ul>

        <?php elseif ($id_servicio == 'cambios'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Cambio de Componente Suelto</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$300 MXN</p>
            <br>
            <p class="texto-descripcion">Instalación segura y configuración de piezas individuales sin tener que desarmar todo el equipo.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Reemplazo de Fuente de Poder (PSU), Tarjeta Gráfica (GPU) o Placa Base.</li>
                <li>✔ Re-enrutamiento de cables necesarios para la nueva pieza.</li>
                <li>✔ Desinstalación limpia de drivers viejos (uso de DDU para gráficas).</li>
                <li>✔ Pruebas de encendido y detección del componente.</li>
            </ul>

        <?php elseif ($id_servicio == 'cotizar'): ?>
            <h1 style="color: #00d2ff; margin-bottom: 10px;">Asesoría: Cotización & Compatibilidad</h1>
            <p class="precio-azul" style="font-size: 1.5rem;">$200 MXN</p>
            <br>
            <p class="texto-descripcion">Evita cuellos de botella y compras equivocadas. Diseñamos tu lista de piezas ideal según tu presupuesto y necesidades reales.</p>
            <ul class="texto-descripcion" style="text-align: left; margin-top: 20px; line-height: 2;">
                <li>✔ Análisis de compatibilidad (Socket, Chipset, Watts de fuente, espacio en gabinete).</li>
                <li>✔ Búsqueda exhaustiva del mejor precio en tiendas confiables de México.</li>
                <li>✔ Balance de componentes para evitar cuellos de botella entre CPU y GPU.</li>
                <li>✔ Entrega de documento detallado con enlaces de compra directos.</li>
            </ul>

        <?php else: ?>
            <h1 style="color: #ff4c4c; margin-bottom: 10px;">Servicio no encontrado</h1>
            <p class="texto-descripcion">Por favor, regresa al catálogo y selecciona un servicio válido.</p>
        <?php endif; ?>

        <br><br>
        <div class="centrar-contenido">
            <a href="catalogo.php">
                <button type="button" class="boton-verum" style="background-color: #1f2937; color: white;">← Volver al Catálogo</button>
            </a>
            <?php if ($id_servicio != 'error'): ?>
            <a href="agendar.php">
                <button type="button" class="boton-verum">Agendar Servicio</button>
            </a>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>