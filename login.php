<?php
// 1. Indicar al servidor que use sesiones
session_start();

// 2. Capturar los datos enviados desde el formulario de forma segura
$usuario_ingresado = $_POST['usuario'] ?? '';
$contrasena_ingresada = $_POST['contrasena'] ?? '';

// 3. Credenciales estáticas para la validación de la tarea
$usuario_correcto = "admin";
$contrasena_correcta = "1234";

// 4. Validar si los datos coinciden
if ($usuario_ingresado === $usuario_correcto && $contrasena_ingresada === $contrasena_correcta) {
    
    // ASIGNACIÓN DE VARIABLES DE SESIÓN (Lo importante para tu nota)
    $_SESSION['usuario'] = $usuario_ingresado;
    $_SESSION['logueado'] = true;
    $_SESSION['id_sesion'] = session_id(); // Guarda el identificador único de la sesión

    // Redireccionar al panel de control protegido
    header("Location: dashboard.php");
    exit();
} else {
    // Si falla, regresa al index con un parámetro de error en la URL
    header("Location: index.php?error=1");
    exit();
}
