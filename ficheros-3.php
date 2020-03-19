<?php

function reemplazar($fichero) {
  
  date_default_timezone_set('Europe/Madrid');

  $ficheroNuevo = str_split($fichero);

  for($i =sizeof($ficheroNuevo)-1;$i>=0;$i--) {

    if($ficheroNuevo[$i]==".") {

      $ficheroNuevo[$i] = ".modificado.";

      $ficheroNuevo = implode("",$ficheroNuevo);

      break;
    }
  }

  $fecha = date('d-m-Y H:i:s');

  mkdir($fecha,0777);

  copy("$fichero","$fecha/$ficheroNuevo");

}

reemplazar("el_quijote.txt");