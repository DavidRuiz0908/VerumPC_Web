<?php include 'header.php'; ?>

<div class="contenedor-admin">

    <!-- 1. MENÚ LATERAL -->
    <aside class="menu-lateral">
        <h3 class="titulo-menu">Panel Verum</h3>
        
        <ul class="lista-menu">
            <li class="item-menu">
                <a href="admin.php" class="link-menu">Resumen General</a>
            </li>
            <li class="item-menu">
                <a href="admin_servicios.php" class="link-menu activo">Gestión de Servicios</a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">Pedidos</a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">Promociones</a>
            </li>
        </ul>
    </aside>

    <!-- 2. CONTENIDO PRINCIPAL -->
    <main class="area-trabajo">
        
        <div style="max-width: 1000px; margin: 0 auto; padding-top: 20px;">
            
            <!-- Encabezado con Botón de Agregar -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                <h2 style="margin: 0;">Gestión de Servicios</h2>
                <button type="button" class="boton-verum" style="background-color: #25D366; color: #121212;" onclick="abrirModal('agregar')">+ Agregar Nuevo Servicio</button>
            </div>

            <!-- Tabla de Inventario Simulada -->
            <div class="tarjeta-fondo-verum" style="padding: 20px; max-width: 100%; margin: 0;">
                <table class="tabla-admin">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Servicio</th>
                            <th>Precio Base</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Servicio 1 -->
                        <tr>
                            <td style="font-weight: bold; color: white;">entrada</td>
                            <td>Gama Entrada / Oficina</td>
                            <td>$600.00 MXN</td>
                            <td><span style="color: #25D366;">Activo</span></td>
                            <td>
                                <button type="button" class="boton-verum boton-pequeño" style="margin-right: 5px;" onclick="abrirModal('editar', 'Gama Entrada / Oficina', '600')">Editar</button>
                                <button type="button" class="boton-verum boton-pequeño" style="background-color: #1f2937; color: #ff4c4c;" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio del catálogo?');">Borrar</button>
                            </td>
                        </tr>
                        <!-- Servicio 2 -->
                        <tr>
                            <td style="font-weight: bold; color: white;">gamer</td>
                            <td>Gama Media / PC Gamer</td>
                            <td>$1,000.00 MXN</td>
                            <td><span style="color: #25D366;">Activo</span></td>
                            <td>
                                <button type="button" class="boton-verum boton-pequeño" style="margin-right: 5px;" onclick="abrirModal('editar', 'Gama Media / PC Gamer', '1000')">Editar</button>
                                <button type="button" class="boton-verum boton-pequeño" style="background-color: #1f2937; color: #ff4c4c;" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio del catálogo?');">Borrar</button>
                            </td>
                        </tr>
                        <!-- Servicio 3 -->
                        <tr>
                            <td style="font-weight: bold; color: white;">limpieza</td>
                            <td>Mantenimiento Profundo</td>
                            <td>$600.00 MXN</td>
                            <td><span style="color: #ff4c4c;">Pausado</span></td>
                            <td>
                                <button type="button" class="boton-verum boton-pequeño" style="margin-right: 5px;" onclick="abrirModal('editar', 'Mantenimiento Profundo', '600')">Editar</button>
                                <button type="button" class="boton-verum boton-pequeño" style="background-color: #1f2937; color: #ff4c4c;" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio del catálogo?');">Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div> 
        
        <!-- Ventana Flotante (Modal) Simulado -->
        <div id="modal-servicio" class="modal-overlay" style="display: none;">
            <div class="modal-contenido">
                <h3 id="titulo-modal" style="color: #00d2ff; margin-bottom: 20px;">Agregar Nuevo Servicio</h3>
                
                <form action="#" method="POST" class="agrupar-formularios">
                    <label>Nombre del Servicio:</label>
                    <input type="text" id="nombre-input" class="input-verum" placeholder="Ej. Formateo de PC">
                    
                    <label style="margin-top: 15px;">Precio Base (MXN):</label>
                    <input type="number" id="precio-input" class="input-verum" placeholder="Ej. 500">

                    <!-- Botones del formulario -->
                    <button type="button" class="boton-verum" style="width: 100%; margin-top: 25px;" onclick="cerrarModal()">Guardar Cambios</button>
                    <button type="button" class="btn-cerrar" style="width: 100%; display: block;" onclick="cerrarModal()">Cancelar</button>
                </form>
            </div>
        </div>

    </main>
</div>

<!-- Lógica JavaScript para abrir/cerrar el modal y cargar datos -->
<script>
    function abrirModal(accion, nombre = '', precio = '') {
        // Muestra el fondo oscuro y la ventana
        document.getElementById('modal-servicio').style.display = 'flex';
        
        // Cambia el título dependiendo de si es Agregar o Editar
        document.getElementById('titulo-modal').innerText = accion === 'editar' ? 'Editar Servicio' : 'Agregar Nuevo Servicio';
        
        // Rellena las cajas de texto
        document.getElementById('nombre-input').value = nombre;
        document.getElementById('precio-input').value = precio;
    }

    function cerrarModal() {
        // Oculta la ventana
        document.getElementById('modal-servicio').style.display = 'none';
    }
</script>