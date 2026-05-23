<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚡ CORE LOGIN ⚡</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: #050508;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            color: #00ffcc;
        }
        /* Contenedor principal con efecto Neón */
        .login-box {
            position: relative;
            background: rgba(10, 10, 15, 0.85);
            padding: 40px;
            width: 360px;
            border-radius: 4px;
            border: 2px solid #00ffcc;
            box-shadow: 0 0 25px rgba(0, 255, 204, 0.3), inset 0 0 15px rgba(0, 255, 204, 0.1);
            text-align: center;
        }
        /* Línea de escaneo animada tipo hacker */
        .login-box::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 2px;
            background: #00ffcc;
            box-shadow: 0 0 10px #00ffcc;
            animation: scan 4s linear infinite;
        }
        @keyframes scan {
            0% { top: 0; }
            50% { top: 100%; }
            100% { top: 0; }
        }
        h2 {
            font-size: 24px;
            letter-spacing: 3px;
            margin-bottom: 30px;
            text-transform: uppercase;
            text-shadow: 0 0 8px rgba(0, 255, 204, 0.6);
        }
        .input-container {
            position: relative;
            margin-bottom: 25px;
            text-align: left;
        }
        label {
            font-size: 11px;
            letter-spacing: 2px;
            color: #888;
            text-transform: uppercase;
        }
        input {
            width: 100%;
            padding: 12px 10px;
            background: #0a0a0f;
            border: 1px solid #333;
            border-bottom: 2px solid #00ffcc;
            color: #fff;
            font-size: 14px;
            margin-top: 5px;
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            border-color: #ff007f;
            box-shadow: 0 0 10px rgba(255, 0, 127, 0.5);
        }
        /* Botón de ingreso con cambio de color */
        button {
            width: 100%;
            padding: 14px;
            background: transparent;
            border: 2px solid #00ffcc;
            color: #00ffcc;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.4s;
            text-transform: uppercase;
            margin-top: 10px;
        }
        button:hover {
            background: #00ffcc;
            color: #050508;
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.8);
            font-weight: 900;
        }
        .error-msg {
            color: #ff0055;
            background: rgba(255, 0, 85, 0.1);
            padding: 10px;
            border: 1px dashed #ff0055;
            font-size: 12px;
            margin-bottom: 20px;
            text-shadow: 0 0 5px rgba(255, 0, 85, 0.4);
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>ACCESS_GRANTED</h2>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="error-msg">> ERROR: ACCESS_DENIED</div>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <div class="input-container">
            <label>> USER_ID</label>
            <input type="text" name="usuario" placeholder="admin" required autocomplete="off">
        </div>
        <div class="input-container">
            <label>> ACCESS_CODE</label>
            <input type="password" name="contrasena" placeholder="••••••••" required>
        </div>
        <button type="submit">EXECUTE_LOGIN()</button>
    </form>
</div>

</body>
</html>
