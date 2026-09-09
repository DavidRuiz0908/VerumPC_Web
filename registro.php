<?php
    include 'header.php';
?>
<main>
    <div class="tarjeta-fondo-verum">
        <div class="logo-verum"></div>
        <h1 class="centrar-contenido">Crear Cuenta Verum</h1>
        <br>
        <form class="centrar-contenido">
                <div class="agrupar-formularios">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" name="nombre" id="nombre" class="input-verum"> 
                </div>

                <div class="agrupar-formularios">     
                    <label for="correo">Correo Electronico</label>
                    <input type="email" name="correo" id="correo" class="input-verum">
                </div>

                <div class="agrupar-formularios">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="input-verum"> 
                </div>

                <div class="agrupar-formularios">
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="input-verum"> 
                </div>

                <br><br>
                <a href='index.php'>
                    <button type="button" class="boton-verum">Registrarme</button>
                </a>
            </form>
        </div>
</main>
<?php
    include 'footer.php';
?>