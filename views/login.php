

<div class="container">
    <h2>Iniciar sesión</h2>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error-message   ">
        <?php echo $_SESSION['error']; ?>
        </div>
     <?php endif; ?>
     <br>
    <form   action="login_process" method="POST">
        <div class="form-group">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="registro">Regístrate aquí</a></p>
</div>

<?php

if (isset($_SESSION['error'])) {
  echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
  unset($_SESSION['error']);
}
?>