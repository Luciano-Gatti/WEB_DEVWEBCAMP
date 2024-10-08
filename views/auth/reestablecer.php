<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nueva contraseña</p>
    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <?php if($token_valido){ ?>
        <form class="formulario" method="POST">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Contraseña</label>
                <input 
                    type="password" 
                    class="formulario__input"
                    id="password"
                    name="password"
                    placeholder="Tu Contraseña Nueva"
                >
            </div>
            <div class="formulario__campo">
                <label for="password2" class="formulario__label">Repetir Contraseña</label>
                <input 
                    type="password" 
                    class="formulario__input"
                    id="password2"
                    name="password2"
                    placeholder="Repite tu Contraseña"
                >
            </div>
            <input type="submit" class="formulario__submit" value="Guardar Contraseña">
        </form>
    <?php } ?>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
    </div>
</main>