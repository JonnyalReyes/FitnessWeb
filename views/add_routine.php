<?php
    require_once 'includes/functions.php';
    redirectIfNotAdmin()
?>

<body>
    <div class="container">
        <a href="index.php?page=home" class="btn-back" aria-label="Volver a la lista de dietas">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
        </a>
        <h1>Agregar Nueva Rutina</h1>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error-message   ">
            <?php echo $_SESSION['error']; ?>
            </div>
         <?php endif; ?>
        <form action="add_routine_process" method="POST">
            <div class="form-group">
                <label for="name">Nombre de la Rutina:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="options">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="options">
                <label for="level">Nivel:</label>
                <select id="level" name="level" required>
                    <option value="">Seleccione un nivel</option>
                    <option value="Principiante">Principiante</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="target_muscle">Músculo Objetivo:</label>
                <input type="text" id="target_muscle" name="target_muscle" required>
            </div>
            <div class="form-group">
                <label for="duration">Duración (minutos):</label>
                <input type="number" id="duration" name="duration" required min="1">
            </div>
            <div class="form-group">
                <label for="calories_burned">Calorías Quemadas:</label>
                <input type="number" id="calories_burned" name="calories_burned" required min="0">
            </div>
            <div class="form-group">
                <label for="image_url">URL de la Imagen:</label>
                <input type="url" id="image_url" name="image_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Rutina</button>
        </form>
    </div>
    
</body>

