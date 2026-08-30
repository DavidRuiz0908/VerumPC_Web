<?php
    include 'header.php';
?>

<main>
    <h1>Iniciar Sesión Verum</h1>
    <form>
        <label>
            Correo Electronico
        </label>
        <input type="email" name="correo" id="correo">
        <br>
        <label>
            Contraseña
        </label>
        <input type="password" name="password" id="password"> 
        <br>
        <a href='perfil.php'>
            <button type="button"> Entrar </button>
        </a>
    </form>
</main>