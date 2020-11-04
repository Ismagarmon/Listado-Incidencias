<?php
session_start();
include 'head.php';
//Contador del índice
if(isset($_REQUEST['enviar']))
{

      $_SESSION['indice']++;

      //Variable para introducir Si es urgente o no
      if(isset($_REQUEST['urgente']))
      {
            $urgente = "Si";
      }
      else 
      {
            $urgente = "No";
      }
      //variable de la fecha
      $fechaActual = date('d-m-Y H:i:s');
      //Varibale de la IP
      $ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);
      //Variable de tipo de incidencia
      $tipo = htmlspecialchars($_REQUEST['tipo']);
      //Variable del lugar
      $lugar = htmlspecialchars($_REQUEST['lugar']);
      //Variable de la descripción
      $descripcion = htmlspecialchars($_REQUEST['descripcion']);
      $num_incidencia = $_SESSION['indice'];
      $_SESSION['array_aso'][$num_incidencia]= array($urgente,$tipo,$fechaActual,$lugar,$ip,$descripcion);
}


print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           