<?php

    include 'header.php';

?>

<main style="max-width: 800px; margin: 30px auto; padding: 0 20px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
        
        <!-- Tarjeta Promo 1 -->
        <div class="tarjeta-fondo-verum" style="padding: 20px; text-align: left;">
            <span style="background-color: #00d2ff; color: #11141a; padding: 3px 8px; font-size: 0.8rem; font-weight: bold; border-radius: 4px;">DESTACADO</span>
            <h3 style="color: #E0E0E0; margin-top: 10px;">2x1 en Mantenimiento Preventivo</h3>
            <p class="texto-descripcion" style="font-size: 0.9rem; margin: 10px 0;">Trae tu equipo y el de un amigo para limpieza profunda y cambio de pasta térmica pagando solo uno.</p>
            <span class="precio-azul">Válido todo el mes</span>
        </div>

        <!-- Tarjeta Promo 2 -->
        <div class="tarjeta-fondo-verum" style="padding: 20px; text-align: left;">
            <span style="background-color: #25D366; color: #11141a; padding: 3px 8px; font-size: 0.8rem; font-weight: bold; border-radius: 4px;">AHORRO</span>
            <h3 style="color: #E0E0E0; margin-top: 10px;">10% OFF en Ensambles Gamer</h3>
            <p class="texto-descripcion" style="font-size: 0.9rem; margin: 10px 0;">Aplica tu descuento en la mano de obra al armar tu PC de gama media o alta con nuestros componentes.</p>
            <span class="precio-azul">Usa el cupón abajo</span>
        </div>

    </div>

    <div class="tarjeta-fondo-verum" style="max-width: 500px; margin: 30px auto; text-align: center; padding: 25px;">
        <h3 style="color: #00d2ff; margin-bottom: 15px;">¿Tienes un código promocional?</h3>
        <input type="text" id="input-cupon" class="input-verum" placeholder="Ej. VERUM2026" style="text-align: center; text-transform: uppercase;">
        <button type="button" class="boton-verum" style="width: 100%; margin-top: 15px;" onclick="aplicarDescuento()">Aplicar Codigo</button>
        <p id="mensaje-cupon" style="margin-top: 15px; font-weight: bold; display: none;"></p>
    </div>
</main>

<script>
    function aplicarDescuento() {
        const codigo = document.getElementById('input-cupon').value.trim();
        const mensaje = document.getElementById('mensaje-cupon');
        
        if (codigo !== "") {
            mensaje.style.display = "block";
            mensaje.style.color = "#25D366"; // Verde éxito estilo Verum
            mensaje.innerText = "¡Descuento aplicado con éxito (simulado)! (-10% en tu orden)";
        } else {
            mensaje.style.display = "block";
            mensaje.style.color = "#ff4c4c"; // Rojo alerta
            mensaje.innerText = "Por favor ingresa un código válido.";
        }
    }
</script>

<?php
    include 'footer.php';
?>