<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form action="/registro" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text" 
                class="formulario__input"
                id="nombre"
                name="nombre"
                value="<?php echo s($usuario->nombre); ?>"
                placeholder="Tu Nombre"
            >
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
                type="text" 
                class="formulario__input"
                id="apellido"
                name="apellido"
                value="<?php echo s($usuario->apellido); ?>"
                placeholder="Tu Apellido"
            >
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="text" 
                class="formulario__input"
                id="eamil"
                name="email"
                value="<?php echo s($usuario->email); ?>"
                placeholder="ejemplo@ejemplo.com"
            >
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input 
                type="password" 
                class="formulario__input"
                id="password"
                name="password"
                placeholder="Tu Contraseña"
            >
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <input 
                type="password" 
                class="formulario__input"
                id="password2"
                name="password2"
                placeholder="Repita su Contraseña"
            >
        </div>
        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
    </div>
</main>