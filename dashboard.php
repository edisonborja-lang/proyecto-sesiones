<?php
// 1. Iniciar sesión para poder leer las variables del servidor
session_start();

// 2. FILTRO DE SEGURIDAD: Si no está logueado, lo saca de inmediato al login
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: index.php");
    exit();
}

// 3. CONTROL DE LOGOUT: Destruir la sesión si el usuario da clic en cerrar sesión
if (isset($_GET['logout'])) {
    session_unset();   // Elimina las variables de sesión
    session_destroy(); // Destruye la sesión en el servidor
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚡ CORE DASHBOARD ⚡</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: #050508;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #00ffcc;
        }
        .dashboard-box {
            background: rgba(10, 10, 15, 0.85);
            padding: 40px;
            width: 450px;
            border-radius: 4px;
            border: 2px solid #00ffcc;
            box-shadow: 0 0 25px rgba(0, 255, 204, 0.3);
            text-align: center;
        }
        h1 {
            font-size: 24px;
            letter-spacing: 2px;
            margin-bottom: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 255, 204, 0.6);
        }
        .status-container {
            background: rgba(0, 255, 204, 0.05);
            border: 1px dashed #00ffcc;
            padding: 20px;
            margin-bottom: 25px;
            text-align: left;
            font-size: 14px;
            line-height: 1.8;
        }
        .highlight { color: #ff007f; font-weight: bold; }
        .btn-logout {
            display: inline-block;
            padding: 12px 30px;
            background: transparent;
            border: 2px solid #ff0055;
            color: #ff0055;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
            text-transform: uppercase;
            cursor: pointer;
        }
        .btn-logout:hover {
            background: #ff0055;
            color: #fff;
            box-shadow: 0 0 20px rgba(255, 0, 85, 0.6);
        }
    </style>
</head>
<body>

<div class="dashboard-box">
    <h1>PANEL_DE_CONTROL_ACTIVO</h1>
    
    <div class="status-container">
        <p>> ESTADO: <span class="highlight">CONEXIÓN_SEGURA</span></p>
        <p>> USUARIO: <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        <p>> SESIÓN_ID: <?php echo htmlspecialchars($_SESSION['id_sesion']); ?></p>
        <p>> TOKEN_STATUS: VALIDATED</p>
    </div>

    <p style="color: #666; font-size: 12px; margin-bottom: 20px;">
        Los estados de autenticación persisten de forma nativa en el servidor mediante la superglobal $_SESSION.
    </p>
    
    <a href="dashboard.php?logout=1" class="btn-logout">LOGOUT_SESSION</a>
</div>

</body>
</html>
