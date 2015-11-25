<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AVP - Registro </title>
            <!-- Bootstrap Core CSS -->
            <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Font Awesome CSS -->
            <link href="../../css/font-awesome.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../../css/animate.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../../css/style.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>

<body>
  <a href="../../view/usuarios/prelogin.php"><div class="section-modal" id="service-modal" tabindex="-1">
    <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
    </a>
      <div class="container">
          <div class="row">
              <div class="section-title text-center">
                  <h3>Registro</h3>
              </div>
          </div>
          <div class="row" style="padding-top: 80px;">
              <div class="col-md-15">
                      <div class="row">
                          <div class="col-md-6">
                            <form method= "post" action="../../controller/procesarRegistroJPOP.php">
                            <label for="name">Login:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="login"
                                required data-validation-required-message="Introduce login">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="name">Nombre:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" name="name"
                                required data-validation-required-message="Introduce nombre">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="name">Email:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                required data-validation-required-message="Introduce email">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="email">Contraseña:</label>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="pass"
                                required data-validation-required-message="Introduce contraseña">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="email">Repetir Contraseña:</label>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Repetir Contraseña" name="pass2"
                                required data-validation-required-message="Repite contraseña">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="name">Descripcion:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Descripcion" name="desc"
                                required data-validation-required-message="Introduce descripcion">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                              <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                            </div>
                            </form>
                            <div class="row" style="padding-top: 155px;">
                            </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>

</body>
</html>
