
<?php
////Listar pinchos breves
function consultarPinchoBreve($pincho)
{
  require_once '../../functions/BDconectar.php';
  //Conectarmos con la bd
  ConectarBD();

  //Realizamos la consulta
  $consulta = mysql_query("SELECT fotoPIN,nombrePIN,precioPIN FROM pincho WHERE idPincho=$pincho")
  or die('No se puede hacer la consulta'. mysql_error());

  //creamos un array asociativo y extraemos la información
    while($fila = mysql_fetch_assoc($consulta))
    {
      return $fila;
    }
}
?>
