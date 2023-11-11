<div class="contenido" id="principal">
<?php
$captcha = file_get_contents("capu_captcha.php");

echo <<<HTML
    <form action="javascript:autenticar()" method="post" id="form-datos">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <img src="capu-captcha.php">
        <input type="text" name="palabra">
        <input type="submit" value="Comprobar">

        <input type="submit" value="Loguearse" >
    </form>
HTML;
?>
      </div>
    <div class="preguntas" id="menu" >
    </div>
    <div class="mensaje" id="mensaje">
        <button class="menu" onclick='cargarBotones("botones.html"),colocarDatos()'>Menu</button>
    </div>
    
