<?php
    include 'header.php';
?>
<main>
    <h2>Registrate</h2>
    <form action="">
        <label for="">Nombre:</label>
        <input type="text">
        <br>
        <label for="">Email:</label>
        <input type="email" name="correo" id="correo">
        <br>
        <label for="">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="">Telefono</label>
        <input type="text">
        <br>
        <a href="login.php">
            <button type="button"> Registrar </button>
        </a>
    </form>
</main>
<?php
    include 'footer.php';
?>