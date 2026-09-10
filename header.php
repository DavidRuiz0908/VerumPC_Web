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
            <a href="home.php" > Inicio </a>
            <a href="catalogo.php" > Catalogo </a>
            <a href="nosotros.php" > Nosotros </a>
            <a href="contacto.php">Contactanos</a>
            <!-- Condicional de PHP: Si la sesión existe, muestra Perfil. Si no, Iniciar Sesión -->
            <?php if(isset($_SESSION['sesion_activa'])): ?>
            <a href="perfil.php" style="color: #00d2ff;">Mi Perfil</a>
            <a href="header.php?logout=1" style="color: #ff4c4c;">Cerrar Sesión</a>
            <?php else: ?>
            <a href="index.php">Iniciar Sesión</a>
            <?php endif; ?>
        </nav>
    </header>
    