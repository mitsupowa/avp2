
<!DOCTYPE html>


<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Bootstrap Core CSS -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS Fondo de inicio-->
        <link href="../../css/style.css" rel="stylesheet">

  </head>
	<tbody>
    <!-- Start Pinchos -->
    <a href="../../controller/controlSesiones.php"><div class="section-modal" id="service-modal" tabindex="-1">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
                </div>
                </a>
    <!--Contenido-->
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>SELECCION DE PINCHOS</h3>
                        <p>Descripcion breve de los pinchos</p>
                    </div>
                </div>
                <div class="row">
                  <center><table>
                        <thead>
                            <h2><?php
                            //require_once("../../controller/controladorPincho.php");
                            require_once("../../model/modeloPincho.php");

                            $a = array();
                            $a = listarPinchos();
                            echo $a;
                            /*
                            $nombre = $_GET["nombrePIN"];
                            echo($nombre);
                            */
                            ?>
                          </h2>
                              <th><h3>Descripcion</h3></th>

                        </thead>
                  </table><center>
                </div>
            </div>
          </div>
        </div>
		<!-- End Latest News Section -->
	</tbody>
</html>
