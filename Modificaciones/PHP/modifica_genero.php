<?PHP
// llamar la funciones
include("../../Php/conec.php");
$conn=conectarse();
extract($_POST);
$sql1= "UPDATE genero SET  id_genero='".$id_genero."',tipo_genero='".$tipo_genero."' where id_genero='".$id_genero."'";
$result1 = pg_query($conn,$sql1);

if($result1===0)
{
     ?>

		<script type="text/javascript">
                alert("ERROR, no se ha podido hacer la modificacion. intente de nuevo");
                window.history.go(-1);
          </script>
	<?php
}
else
{
     ?>

		<script type="text/javascript">
                     alert("YUJUU!! El registro ha sido modificado con exito!");
                     window.history.go(-2);
          </script>

	<?php
}
?>
