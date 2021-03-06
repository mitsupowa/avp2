
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>AVP - Busqueda </title>

        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom CSS -->
        <link href="../../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
<body>

  <a href="../../controller/controlSesiones.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
              <h3>Busqueda</h3>
              <p>Busca los pinchos o establecimientos que desees</p>
            </div>
          </div>
        <div class="row" style="padding-top: 20px;">
			   <div class="col-md-12">
				   <div class="row">
						  <h1 style="text-align:center"></h1>
							  <div class ="col-md-4 col-md-offset-4">
								 <section id="search">
								 <form action="../../controller/controlbusca.php" method="POST">
  								   <label for="search-input">
  									    <i class="fa fa-search"></i>
  								  </label>
                    <!--primer input PINCHO-->
  								  <input id="pincho" name="pincho" class="form-control input-lg" placeholder="Buscar pincho"  tabindex="1">
                    <a id="search-clear" href="#" class="fa fa-times-circle hide"></a>

    								<div class="col-lg-12 text-center">
    									<button id='button1' type="submit" value="Submit" class="btn btn-primary" style="margin-right:28px">Buscar Pincho</button>
    								</div>
                </form>
                <form action="../../controller/controlbusca.php" method="POST">
                    <label for="search-input">
                       <i class="fa fa-search"></i>
                    </label>
                    <!--primer input ESTABLECMIENTO-->
                    <input id="establecimiento" name="estab" class="form-control input-lg" placeholder="Buscar establecimiento"  tabindex="1">
                    <a id="search-clear" href="#" class="fa fa-times-circle hide"></a>
                    <div class="col-lg-12 text-center">
                      <button id='button1' type="submit" value="Submit" class="btn btn-primary" style="margin-right:28px">Buscar Establecimiento</button>
                    </div>
                </form>
								</section>
								<div class="row" style="padding-top: 403px;"></div>
							  </div>
					  </div>
				</div>
			</div>
		</div>
  </div>
</body>
</html>
