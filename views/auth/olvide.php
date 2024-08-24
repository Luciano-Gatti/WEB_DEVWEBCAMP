<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>
    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <form action="/olvide" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="text" 
                class="formulario__input"
                id="eamil"
                name="email"
                placeholder="ejemplo@ejemplo.com"
            >
        </div>
        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
    </div>
</main>