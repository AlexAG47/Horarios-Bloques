<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Login.css" rel="stylesheet">
    <title>Iniciar Sesión</title>

    <?php require('../Librerias/Graficos.php'); ?>

</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-4 ">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-4">
              <h2 class="fw-bold mb-2">Iniciar Sesión</h2>
              <p class="text-white-50 mb-5">Ingresa tu cuenta para entrar</p>
              <form method="POST" action="../Funciones/Php/Iniciar_sesion.php">
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX" name="correo">Correo</label>
                    <input type="email" id="typeEmailX" class="form-control form-control-lg "name="correo" required/>
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX" name="contraseña">Contraseña</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="contraseña" required/>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar</button>
                
            </form>
            </div>
            <div id="alerta"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

 <!-- Funciones -->
 <script type="text/javascript" src="../Funciones/Js/Funciones_alertas.js"></script>

<?php require('../Funciones/Php/Sesion_alerta.php'); ?> 


