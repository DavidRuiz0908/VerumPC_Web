<?php
    include 'header.php';
?>
<main>
    <div class="hero-verum">
        <h1> Catalago de Servicio </h1>
        <p>Soluciones a la medida con transparencia total en costos de hardware y mano de obra.</p>
        <br>
    </div>
    <div class="categoria-catalogo">
        <h2 class="centrar-contenido" style="color:#00d2ff">ENSAMBLES A MEDIDA</h2>

        <div class="tarjeta-servicio">
            <div>
                <h3>Gama Entrada / Oficina</h3>
                <p class="texto-descripcion">Ensamble + Gestión de cables + SO & Drivers</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$600 MXN</p>
                <a href="detalle.php?id=entrada">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>

        <div class="tarjeta-servicio">
            <div>
                <h3>Gama Media / PC Gamer</h3>
                <p class="texto-descripcion">Ensamble + Cableado Premium + BIOS XMP/EXPO + Test térmico</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$1,000 MXN</p>
                <a href="detalle.php?id=gamer">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>

        <div class="tarjeta-servicio">
            <div>
                <h3>Gama Alta / Workstation & AIO</h3>
                <p class="texto-descripcion">Refrigeracion Liquida + RGB complejo + Test de estres prolongado</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$1,500 MXN</p>
                <a href="detalle.php?id=alta">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>  
    </div>

    <div class="categoria-catalogo">
        <h2 class="centrar-contenido" style="color:#00d2ff">Mantenimiento & Revitalizacion</h2>

        <div class="tarjeta-servicio">
            <div>
                <h3>Limpieza Profunda</h3>
                <p class="texto-descripcion">Limpieza de chasis/ventiladores + Pasta termica de alto rendimiento</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$600 MXN</p>
                <a href="detalle.php?id=limpieza">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>

        <div class="tarjeta-servicio">
            <div>
                <h3>Upgrade de Veocidad (SSD + RAM)</h3>
                <p class="texto-descripcion">Instalacion de componentes en PCs o laptos lentas + Optimizacion</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$400 MXN</p>
                <a href="detalle.php?id=upgrade">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>

        <div class="tarjeta-servicio">
            <div>
                <h3>Cambio Componente Suelto</h3>
                <p class="texto-descripcion">Inastalacion de Terjeta Grafica, Fuente de poder o Motherbaord</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$300 MXN</p>
                <a href="detalle.php?id=cambios">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>
    </div>

    <div class="categoria-catalogo">
        <h2 class="centrar-contenido" style="color:#00d2ff">Asesoria E Ingenieria</h2>

        <div class="tarjeta-servicio">
            <div>
                <h3>Cotizacion & Compatibilidad</h3>
                <p class="texto-descripcion">Busqueda exhaustiva al mejor precio en tiendas confiables</p>
            </div>
            <div class="acciones-servicio">
                <p class="precio-azul">$200 MXN</p>
                <a href="detalle.php?id=cotizar">
                    <button class="boton-verum boton-pequeño">Ver Detalles</button>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>