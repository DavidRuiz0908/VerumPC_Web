<?php include 'header.php'; ?>

<main style="max-width: 900px; margin: 40px auto; padding: 0 20px;">
    
    <!-- Banner de Campaña -->
    <div class="tarjeta-fondo-verum" style="padding: 40px; text-align: center; border: 2px solid #00d2ff; margin-bottom: 40px;">
        <span style="background-color: #00d2ff; color: #11141a; padding: 5px 12px; font-size: 0.85rem; font-weight: bold; border-radius: 4px;">CAMPAÑA DE TEMPORADA</span>
        <h1 style="color: #00d2ff; font-size: 2.2rem; margin: 20px 0 10px 0;">Kit de Optimización Extrema Verum</h1>
        <p class="texto-descripcion" style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 25px auto;">
            Dale una segunda vida a tu PC. Incluye mantenimiento preventivo profundo, cambio de pasta térmica de alta gama y formateo completo con instalación limpia.
        </p>
        <div style="font-size: 1.8rem; font-weight: bold; color: #25D366; margin-bottom: 25px;">$950.00 MXN <span style="font-size: 1rem; color: #8892b0; text-decoration: line-through;">$1,200 MXN</span></div>
        
        <!-- Llamado a la Acción (CTA) -->
        <a href="catalogo.php">
            <button type="button" class="boton-verum" style="font-size: 1.1rem; padding: 12px 30px; background-color: #00d2ff; color: #11141a;">Comprar Ahora</button>
        </a>
    </div>

    <!-- Sección de Testimonios -->
    <h2 style="color: #E0E0E0; text-align: center; margin-bottom: 25px;">Lo que dicen nuestros clientes</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 40px;">
        
        <!-- Testimonio 1 -->
        <div class="tarjeta-fondo-verum" style="padding: 20px;">
            <p style="color: #00d2ff; font-size: 1.2rem; margin-bottom: 10px;">★★★★★</p>
            <p class="texto-descripcion" style="font-size: 0.95rem; font-style: italic; margin-bottom: 15px;">
                "Llevé mi PC que ya ni encendía bien y me la entregaron volando. El servicio técnico de Verum es impecable."
            </p>
            <span style="color: #E0E0E0; font-weight: bold; font-size: 0.9rem;">— Carlos M. (Ensamble Gamer)</span>
        </div>

        <!-- Testimonio 2 -->
        <div class="tarjeta-fondo-verum" style="padding: 20px;">
            <p style="color: #00d2ff; font-size: 1.2rem; margin-bottom: 10px;">★★★★★</p>
            <p class="texto-descripcion" style="font-size: 0.95rem; font-style: italic; margin-bottom: 15px;">
                "Excelente atención los sábados. Me ayudaron a cotizar mis piezas sin gastar de más. Altamente recomendados."
            </p>
            <span style="color: #E0E0E0; font-weight: bold; font-size: 0.9rem;">— Sofía R. (Asesoría y Componentes)</span>
        </div>

    </div>

</main>

<?php
    include 'footer.php';
?>