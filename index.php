<?php
    include 'header.php';
?>

<main>
    <div class="tarjeta-fondo-verum">  
        <h1 class="centrar-contenido">Iniciar Sesión Verum</h1>
        <br>
        <form class="centrar-contenido">

            <div class="agrupar-formularios">     
                <label for="correo">Correo Electronico</label>
                <input type="email" name="correo" id="correo" class="input-verum">
            </div>

            <div class="agrupar-formularios">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="input-verum"> 
            </div>

            <br><br>
            <a href='home.php'>
                <button type="button" class="boton-verum"> Entrar </button>
            </a>
            <a href='registro.php'>
                <button type="button" class="boton-verum" style="background-color: #1f2937; color: white;"> Crear Cuenta </button>
            </a>
        </form>
    </div>
</main>
