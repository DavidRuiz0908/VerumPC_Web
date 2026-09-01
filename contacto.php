<?php
    include 'header.php';
?>

<main>
    <h2>Contactate con Nosotros</h2>
<form action="">
    <label for="">Nombre:</label>
    <input type="text">
    <br>
    <label for="">Email:</label>
    <input type="email" name="correo" id="correo">
    <br>
    <textarea name="mensaje" id="mensaje">Escribe tu mensaje</textarea>
    <br>
    <button type="button" onclick="alert('Mensaje Enviado')">Enviar</button>
</form>
<h3>Nuestras Redes Verum</h3>
<ul>
    <li><a href="https://www.instagram.com/verum.pc?utm_source=ig_web_button_share_sheet&igsi=ZDNlZDc0MzIxNw==">Instagram</a></li>
    <li><a href="https://www.facebook.com/profile.php?id=61592615694768">Facebook</a></li>   
    <li><a href="">Tik Tok</a></li>
    <li><a href="">WhatsApp</a></li> 
</ul>
</main>

<?php
    include 'footer.php';
?>