<?php include 'header.php'; ?>

<main style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
    
    <h1 style="color: #00d2ff; text-align: center; margin-bottom: 10px;">Subasta Activa Verum</h1>
    <p class="texto-descripcion" style="text-align: center; margin-bottom: 30px;">Puja por hardware exclusivo de gama alta antes de que termine el tiempo.</p>

    <!-- Tarjeta del Producto en Subasta -->
    <div class="tarjeta-fondo-verum" style="padding: 30px; margin-bottom: 30px; border: 2px solid #00d2ff;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
            <div>
                <span style="background-color: #ff4c4c; color: #fff; padding: 3px 8px; font-size: 0.8rem; font-weight: bold; border-radius: 4px;">EN VIVO</span>
                <h2 style="color: #E0E0E0; margin-top: 10px;">Tarjetas Gráficas RTX 3080 Ti (Edición Especial)</h2>
                <p class="texto-descripcion" style="margin: 5px 0;">Estado: Como nueva, probada en banco de pruebas Verum.</p>
                <p style="color: #8892b0; font-size: 0.9rem; margin-top: 10px;">Puja Actual Más Alta:</p>
                <span id="puja-actual" class="precio-azul" style="font-size: 1.8rem;">$11,500.00 MXN</span>
            </div>
            <!-- Temporizador Visual Falso -->
            <div style="background-color: rgba(0, 210, 255, 0.1); border: 1px solid #00d2ff; padding: 15px; border-radius: 8px; text-align: center; min-width: 150px;">
                <span style="color: #8892b0; font-size: 0.8rem; display: block;">CIERRA EN</span>
                <span style="color: #00d2ff; font-size: 1.5rem; font-weight: bold;">04h : 22m : 15s</span>
            </div>
        </div>
    </div>

    <!-- Panel para Hacer Oferta -->
    <div class="tarjeta-fondo-verum" style="padding: 25px; margin-bottom: 30px;">
        <h3 style="color: #E0E0E0; margin-bottom: 15px;">Realizar una Oferta</h3>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <input type="number" id="input-oferta" class="input-verum" placeholder="Ingresa tu monto (MXN)" style="flex: 1; min-width: 200px; margin: 0;">
            <button type="button" class="boton-verum" style="padding: 0 25px;" onclick="registrarOferta()">Ofertar</button>
        </div>
        <p id="mensaje-subasta" style="margin-top: 15px; font-weight: bold; display: none;"></p>
    </div>

    <!-- Lista de Ofertas Simuladas -->
    <h3 style="color: #E0E0E0; margin-bottom: 15px;">Historial de Pujas</h3>
    <div id="lista-pujas" style="display: flex; flex-direction: column; gap: 10px;">
        <div class="tarjeta-fondo-verum" style="padding: 15px; display: flex; justify-content: space-between;">
            <span style="color: #00d2ff;">Usuario: @CyberUser_99</span>
            <span style="color: #E0E0E0; font-weight: bold;">$11,500 MXN</span>
        </div>
        <div class="tarjeta-fondo-verum" style="padding: 15px; display: flex; justify-content: space-between;">
            <span style="color: #00d2ff;">Usuario: @HardwareMaster</span>
            <span style="color: #E0E0E0; font-weight: bold;">$11,000 MXN</span>
        </div>
    </div>

</main>

<script>
    function registrarOferta() {
        const input = document.getElementById('input-oferta');
        const mensaje = document.getElementById('mensaje-subasta');
        const pujaActual = document.getElementById('puja-actual');
        const listaPujas = document.getElementById('lista-pujas');

        const valor = parseFloat(input.value);

        if (isNaN(valor) || valor <= 0) {
            mensaje.style.display = "block";
            mensaje.style.color = "#ff4c4c";
            mensaje.innerText = "Por favor ingresa una cantidad válida.";
            return;
        }

        // Mostrar mensaje de éxito simulado
        mensaje.style.display = "block";
        mensaje.style.color = "#25D366";
        mensaje.innerText = "¡Oferta registrada con éxito (simulado)!";

        // Actualizar la interfaz visualmente
        pujaActual.innerText = "$" + valor.toLocaleString() + ".00 MXN";

        // Crear elemento nuevo en el historial
        const nuevaPuja = document.createElement('div');
        nuevaPuja.className = 'tarjeta-fondo-verum';
        nuevaPuja.style.padding = '15px';
        nuevaPuja.style.display = 'flex';
        nuevaPuja.style.justifyContent = 'space-between';
        nuevaPuja.style.border = '1px solid #25D366';
        
        nuevaPuja.innerHTML = `
            <span style="color: #25D366;">Tú (Oferta Reciente)</span>
            <span style="color: #E0E0E0; font-weight: bold;">$${valor.toLocaleString()}.00 MXN</span>
        `;

        listaPujas.prepend(nuevaPuja);
        input.value = "";
    }
</script>

<?php
    include 'footer.php';
?>