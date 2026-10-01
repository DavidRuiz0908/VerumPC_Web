<?php
    include 'header.php';
    
    // --- 1. LÓGICA PARA AGREGAR SERVICIOS A LA ORDEN ---
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_servicio'])) {
        $id = $_POST['id_servicio'];
        $cantidad = (int)$_POST['cantidad'];
        
        // Si no existe la orden, la inicializamos
        if (!isset($_SESSION['orden'])) {
            $_SESSION['orden'] = [];
        }
        
        // Si el servicio ya estaba en la orden, sumamos la cantidad. Si no, lo agregamos.
        if (isset($_SESSION['orden'][$id])) {
            $_SESSION['orden'][$id] += $cantidad;
        } else {
            $_SESSION['orden'][$id] = $cantidad;
        }
    }

    // --- 2. LÓGICA PARA ELIMINAR SERVICIOS DE LA ORDEN ---
    if (isset($_GET['eliminar'])) {
        $id_eliminar = $_GET['eliminar'];
        // Si el ID existe en la sesión, lo borramos con unset()
        if (isset($_SESSION['orden'][$id_eliminar])) {
            unset($_SESSION['orden'][$id_eliminar]);
        }
    }

    if (isset($_GET['accion']) && isset($_GET['id_modificar'])) {
        $accion = $_GET['accion'];
        $id_mod = $_GET['id_modificar'];

        if (isset($_SESSION['orden'][$id_mod])) {
            if ($accion == 'sumar') {
                $_SESSION['orden'][$id_mod]++; // Suma 1
            } elseif ($accion == 'restar') {
                // Si tiene más de 1, resta. Si tiene 1, se elimina por completo.
                if ($_SESSION['orden'][$id_mod] > 1) {
                    $_SESSION['orden'][$id_mod]--;
                } else {
                    unset($_SESSION['orden'][$id_mod]);
                }
            }
            // Recargamos la página para limpiar la URL y evitar clics duplicados
            header("Location: carrito.php");
            exit;
        }
    }
?>

<main>
    <div class="hero-verum">
        <h1 style="color: #00d2ff;">Mi Orden de Servicio</h1>
        <p class="texto-descripcion">Revisa los servicios y la cantidad de equipos antes de proceder.</p>
    </div>

    <!-- Verificamos si la orden está vacía -->
    <?php if (empty($_SESSION['orden'])): ?>
        
        <div class="tarjeta-fondo-verum centrar-contenido" style="padding: 50px 20px; max-width: 600px; margin-bottom: 50px;">
            <h3 style="margin-bottom: 20px;">Tu orden está vacía</h3>
            <p class="texto-descripcion" style="margin-bottom: 30px;">Aún no has agregado ningún equipo o servicio para cotizar.</p>
            <a href="catalogo.php">
                <button type="button" class="boton-verum">Explorar Catálogo</button>
            </a>
        </div>

    <?php else: ?>
        <!-- Si hay servicios en la orden, procesamos los datos -->
        <?php
            // Nuestro diccionario completo de servicios (Mini Base de Datos)
            $datos_servicios = [
                'entrada'  => ['nombre' => 'Gama Entrada / Oficina', 'precio' => 600],
                'gamer'    => ['nombre' => 'Gama Media / PC Gamer', 'precio' => 1000],
                'alta'     => ['nombre' => 'Gama Alta / Workstation & AIO', 'precio' => 1500],
                'limpieza' => ['nombre' => 'Mantenimiento Profundo', 'precio' => 600],
                'upgrade'  => ['nombre' => 'Upgrade de Velocidad (SSD + RAM)', 'precio' => 400],
                'cambios'  => ['nombre' => 'Cambio Componente Suelto', 'precio' => 300],
                'cotizar'  => ['nombre' => 'Asesoría: Cotización & Compatibilidad', 'precio' => 200]
            ];
            
            $total_orden = 0; 
        ?>

        <div style="max-width: 800px; margin: 0 auto;">
            
            <!-- Ciclo para imprimir cada tarjeta -->
            <?php foreach ($_SESSION['orden'] as $id => $cantidad): ?> 
                <?php 
                    // Validación de seguridad: si el ID no existe en el diccionario, lo ignoramos
                    if(isset($datos_servicios[$id])) {
                        $nombre_servicio = $datos_servicios[$id]['nombre'];
                        $precio_unitario = $datos_servicios[$id]['precio'];
                        $subtotal = $precio_unitario * $cantidad;
                        $total_orden += $subtotal;
                    } else {
                        continue; 
                    }
                ?>
                
                <!-- Tarjeta visual del servicio agregado -->
                <div class="tarjeta-servicio" style="margin-bottom: 20px;">
                    <div>
                        <h3 style="margin-top: 0; color: white;"><?php echo $nombre_servicio; ?></h3>
                        <!-- Mini panel de control de cantidades -->
                        <div style="display: flex; align-items: center; gap: 15px; margin: 10px 0;">
                            <p class="texto-descripcion" style="margin: 0;">Equipos a trabajar:</p>
                            
                            <!-- Botón de Restar -->
                            <a href="carrito.php?accion=restar&id_modificar=<?php echo $id; ?>" style="text-decoration: none;">
                                <button type="button" class="boton-verum" style="padding: 2px 10px; background-color: #1f2937; border-radius: 4px;">-</button>
                            </a>
                            
                            <strong style="color: #00d2ff; font-size: 1.2rem;"><?php echo $cantidad; ?></strong>
                            
                            <!-- Botón de Sumar -->
                            <a href="carrito.php?accion=sumar&id_modificar=<?php echo $id; ?>" style="text-decoration: none;">
                                <button type="button" class="boton-verum" style="padding: 2px 10px; background-color: #1f2937; border-radius: 4px;">+</button>
                            </a>
                        </div>
                        <p class="texto-descripcion" style="font-size: 0.85rem; margin: 0;">Costo unitario: $<?php echo number_format($precio_unitario, 2); ?> MXN</p>
                    </div>
                    
                    <div class="acciones-servicio">
                        <p class="precio-azul" style="font-size: 1.3rem; margin: 0 0 10px 0;">$<?php echo number_format($subtotal, 2); ?> MXN</p>
                        
                        <!-- El botón manda a la misma página, pero pasando la variable 'eliminar' -->
                        <a href="carrito.php?eliminar=<?php echo $id; ?>">
                            <button type="button" class="boton-verum btn-pequeno" style="background-color: #ff4c4c; color: white; border: none;">Eliminar de la orden</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <!-- Resumen Total -->
            <div style="text-align: right; margin-top: 30px; margin-bottom: 30px; border-top: 1px solid #1f2937; padding-top: 20px;">
                <h2 style="color: #00d2ff; font-size: 2rem; margin-bottom: 10px;">Total Estimado: $<?php echo number_format($total_orden, 2); ?> MXN</h2>
                <p class="texto-descripcion" style="font-size: 0.9rem;">*Los precios finales no incluyen refacciones, únicamente mano de obra especializada.</p>
            </div>
            
            <!-- Botón de Checkout -->
            <div class="centrar-contenido" style="margin-bottom: 60px;">
                <a href="agendar.php">
                    <button type="button" class="boton-verum" style="padding: 15px 40px; font-size: 1.1rem;">Proceder a Confirmar Orden</button>
                </a>
            </div>

        </div>

    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>