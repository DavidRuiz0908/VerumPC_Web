<?php 
    // Esto DEBE ir en la línea 1 de header.php, hasta arriba de todo
    session_start(); 

    // Simulador de Inicio de Sesión para la presentación
    if (isset($_GET['login'])) {
        $_SESSION['sesion_activa'] = true;
    }

    // Simulador de Cierre de Sesión
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: home.php"); // Redirige al inicio limpio
        exit;
    }
?>

<?php
    $marca = "Verum";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $marca ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="logo-verum">
            <a href="home.php">VERUM</a>
        </div>
        <nav>
            <a href="catalogo.php" style="color: #07f7fb; font-weight: bold;"> Catalogo </a>
            <a href="promociones.php" style="color: #940000; font-weight: bold;">Promociones</a>
            <a href="campaña.php" style="color: #940000; font-weight: bold;">Destacados</a>
            <a href="nosotros.php" style="color: #00d2ff; font-weight: bold;"> Nosotros </a>
            <a href="comunidad.php" style="color: #00d2ff; font-weight: bold;"> Comunidad </a>
            <a href="contacto.php" style="color: #00d2ff; font-weight: bold;"> Contactanos </a>
            <a href="carrito.php" style="color: #00d2ff; font-weight: bold;">Mis Ordenes</a>
            <a href="publicar_c2c.php" style="color: #059a32; font-weight: bold;">Vender</a>
            <a href="mis_publicaciones.php" style="color: #059a32; font-weight: bold;">Mis Ventas</a>
            <a href="subasta.php" style="color: #059a32; font-weight: bold;">Subastar</a>
            <a href="admin.php" style="color: #acb7d2; font-weight: bold;">Admin</a>
            <!-- Condicional de PHP: Si la sesión existe, muestra Perfil. Si no, Iniciar Sesión -->
            <?php if(isset($_SESSION['sesion_activa'])): ?>
            <a href="perfil.php" style="color: #acb7d2;">Mi Perfil</a>
            <a href="header.php?logout=1" style="color: #ff4c4c;">Cerrar Sesión</a>
            <?php else: ?>
            <a href="index.php">Iniciar Sesión</a>
            <?php endif; ?>
        </nav>
    </header>
    