<?php session_start(); ?>
<HTML lang="es">
  <HEAD>
      <TITTLE></TITTLE>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/Estilos.css">
      <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="js/alertas.js"></script>
  </HEAD>
      <BODY class="primero">
        <div id="mensaje"></div>
        <!-- modal -->
        <div id="ventana" class="ventana">
          <h2 id="texto"></h2>
          <p id="texto-p"></p>
        </div>

        <div id="ventana" class="ventana">
          <h2 id="texto"></h2>
          <p id="texto-p"></p>
        </div>
        <!-- modal fin -->
          <div class="conte">
            <div class="caja"></div>
            <div class="cambio">
              <span id="letras"> Crear cuenta</span>
            </div>
            <div class="global">
                <h2>Inicio de sesion</h2>
                <form action="php/login.php" method="post" onSubmit="return login()">
                  <p> </p>
                <input type="text" placeholder="Usuario" name="usernameLogin" id="usernameLogin">

                <input type="password" placeholder="Contraseña" name="passwordLogin" id="passwordLogin">

                <input type="submit" name="ingresar" value="Ingresar">
              </form>
            </div>
            <div class="global">
                <h2>Crear Cuenta</h2>
                <form  action="php/registro.php" method="post" onSubmit="return registro()">
                <input type="text" placeholder="Nombre completo" name="fullname" id="fullname">

                <input type="email" placeholder="Correo electronico" name="email" id="email">

                <input type="text" placeholder="Nombre de usuario" name="username" id="username">

                <input type="password" placeholder="Contaseña" name="password" id="password">

                <input type="password" placeholder="Confirmar contaseña" id="confirm_password" name="confirm_password">

                <input type="submit" value="Registrar">
              <form action="#">
            </div>
          </div>
      <script type="text/javascript" src="js/main.js"></script>
      </BODY>
    </HTML>
