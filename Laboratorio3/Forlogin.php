<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Document</title>
</head>
<body>
 <center>
    
    <div id="marco">
  <h1>BIENVENIDO</h1> 
                
               <br>
              <br>
               <form action="autenticar.php" method="POST">
                Usuario:
                <input type="text" name="txtCorreo" placeholder="Digite su correo" value="<?php
                 if (isset($_COOKIE['Usuario']))
                  {
                    echo $_COOKIE['Usuario'];
                  }
                ?>"/>
                 <br><br>
                 Contraseña:
                 <input type="password" name="txtPassword" placeholder="digite clave">
                 <br><br>
                  <input type="checkBox" name="rusuario" value="Recordar"
                 <?php if (isset($_COOKIE['Usuario']))
                 {
                  echo 'checked= "cheked"';
                 }

                  ?>>Recordar usuario <br>
                  <input type="checkBox" name="rpassword">Recordar contraseña
                  <br>
                 <button type="submit" > ENTRAR</button>
                 <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar">
         
                </form>
        </div>
        </center>
</body>
</html>

