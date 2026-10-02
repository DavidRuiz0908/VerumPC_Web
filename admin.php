<?php
    include 'header.php'
?>

<!-- Contenedor maestro Flexbox -->
<div class="contenedor-admin">

    <!-- Caja 1: El menú lateral -->
    <aside class="menu-lateral">
        <h3 class="titulo-menu">Panel Verum</h3>
        <ul class="lista-menu">
            <li class="item-menu">
                <a href="admin.php" class="link-menu activo">Resumen General</a>
            </li>
            <li class="item-menu">
                <a href="admin_servicios.php" class="link-menu">Gestion de Servicios</a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">Pedidos</a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">Promociones</a>
            </li>
        </ul>
    </aside>

    <!-- Caja 2: El área de trabajo -->
    <main class="area-trabajo">
        <div style="max-width: 900px; margin: 0 auto; padding-top: 20px;">
            <h2 style="margin-bottom: 5px;">Resumen del Sistema</h2>
            <p class="texto-descripcion" style="margin-bottom: 40px;">Bienvenido al panel de control. Aquí puedes ver las métricas clave de Verum.</p>

            <!-- Cuadrícula de tarjetas de resumen -->
            <div class="grid-resumen">
                
                <div class="tarjeta-resumen">
                    <h1 class="numero-resumen cyan">8</h1>
                    <p class="texto-descripcion">Servicios en Catálogo</p>
                </div>

                <div class="tarjeta-resumen">
                    <h1 class="numero-resumen verde">5</h1>
                    <p class="texto-descripcion">Órdenes Pendientes</p>
                </div>

                <div class="tarjeta-resumen">
                    <h1 class="numero-resumen rojo">2</h1>
                    <p class="texto-descripcion">Promociones Activas</p>
                </div>

            </div>
        </div>
    </main>
</div>
