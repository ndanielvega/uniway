<?PHP
// llamar la funciones
include("../Php/conec.php");
include("../Php/encabezado.php");
include("../Php/barra_nav.php");
     $conn=conectarse();
     $titulo="Consulta genero";
     hacer_encabezado($titulo);
     hacer_barra_nav();
     extract($_POST);


     $sql1="SELECT* FROM genero WHERE id_genero='$codigo'";
     $result1 = pg_query($conn,$sql1);
     $numFilas = pg_numrows($result1);
     if  ($numFilas!=0)
     {
          if ($vector=pg_fetch_array($result1))
          {
               $id_genero=$vector["0"];
               $genero=$vector["1"];
               ?>
               <table id="consulta">
                    <tr>
                         <td colspan="2" >
                              <h2>
                                   Resultados de la consulta:
                              </h2>
                         </td>
                    </tr>
                    <tr>
                         <td>&nbsp;ID GENERO&nbsp;</td>
                         <td><?PHP echo $id_genero;?></td>
                    </tr>
                    <tr>
                         <td>&nbsp;GENERO&nbsp;</td>
                         <td><?PHP echo $genero; ?></td>
                    </tr>
                    <?php
               }
               pg_free_result($result1);
               pg_close($conn);
          }else{
               ?>
               <table id="consulta">
                    <tr>
                         <td colspan="2" >
                              <h2>
                                   Resultados de la consulta:
                              </h2>
                         </td>
                    </tr>
                    <tr>
                         <td colspan="2">
                              NO SE HA ENCONTRADO NINGUN ELEMENTO EN LA TABLA
                         </td>
                    </tr>
                    <?PHP
               }

          ?>
     	     <tr>
     	          <td colspan="2">
     	            <a href="../consultar.html"> <button class="botonVolver" >Volver</button> </a>
     	          </td>
     	     </tr>
     	</table>
     </body>
     </html>
