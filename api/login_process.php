<?php
require_once './includes/functions.php';
require_once './includes/database.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitizeInput($_POST['username']);
    $password = $_POST['password'];

    $db = new Database();
    $conn = $db->getConnection();

    $stmt = $conn->prepare("SELECT id, password, is_admin FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['is_admin'] = $user['is_admin'];
            header("Location: index.php");
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "Usuario no encontrado";
        echo "'Inicio de sesión exitoso', 'success'";
    }

    if (isset($error)) {
        $_SESSION['error'] = $error;
        header("Location: login");
    }
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo "'Inicio de sesión exitoso', 'success'";
        header("Location: index.php?page=home");
        exit();
    } else {
        echo "'Error al iniciar sesión. Verifica tus credenciales.', 'error'";
    }

}
?>
