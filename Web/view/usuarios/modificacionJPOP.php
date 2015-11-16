<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery.appear.js"></script>
        <script src="../js/contact_me.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
	
	      <a href="../../view/usuarios/juradoPopular.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                            <h3>Modificacion de datos:</h3>
                            <p>Jurado Popular</p>
							                    <div class="row" style="padding-top: 80px;">

                                        <label for="name">Nombre:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Introduce nombre">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="email">Email:</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Introduce tu nuevo email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="password1">Clave:</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Clave" id="password" required data-validation-required-message="Introduce tu nueva clave">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="password2">Repite clave:</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirmar Clave" id="password2" required data-validation-required-message="Confirma tu nueva clave">
                                            <p class="help-block text-danger"></p>
                                        </div>                                        
                                        <label for="description">Descripcion:</label>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Descripcion" id="description" required data-validation-required-message="Introduce una descripcion"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    

                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">MODIFICAR</button>
                                    </div>
                                    <div class="row" style="padding-top: 200px;">
                                </div>
                        </div>
                    </div>
                </div>
                                   


    </body>
    
</html>