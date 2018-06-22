<?php session_start(); ?>
<HTML lang="es">
  <HEAD>
      <TITTLE></TITTLE>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/Estilos.css">
  </HEAD>
      <BODY class="primero">
          <div class="conte">
            <div class="caja"></div>
            <div class="cambio">
              <span> Crear cuenta</span>
            </div>
            <div class="global">
                <h2>Inicio de sesion</h2>
                <form action="php/login.php" method="post">
                <input type="text" placeholder="Usuario" name="username" id="username">

                <input type="password" placeholder="Contraseña" name="password" id="password">

                <input type="submit" value="Ingresar">
              </form>
            </div>
            <div class="global">
                <h2>Crear Cuenta</h2>
                <form  action="php/registro.php" method="post">
                <input type="text" placeholder="Nombre completo" name="fullname" id="fullname">

                <input type="email" placeholder="Correo electronico" name="email" id="email">

                <input type="text" placeholder="Nombre de usuario" name="username" id="username">

                <input type="password" placeholder="Contaseña" name="password" id="password">

                <input type="password" placeholder="Confirmar contaseña" id="confirm_password" name="confirm_password">

                <input type="submit" value="Registrar">
              <form action="#">
            </div>
            <div class="olvidar">
              <a href="#" onclick="RecuperarCon()">Recordar mi contraseña</a>
            </div>
          </div>
          <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
          <script type="text/javascript" src="js/main.js"></script>
      </BODY>
    </HTML>