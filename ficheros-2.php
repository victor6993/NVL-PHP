<?php

function reemplazar($fichero,$ficheroNuevo,$palabraABuscar,$palabraASustituir) {
  $fichero = fopen($fichero,"r+");
  $newFichero = fopen($ficheroNuevo,"w+");
  while(($contenido = fgets($fichero))!== false) {
    $contenidoCambiado = str_replace($palabraABuscar,$palabraASustituir,$contenido);
    fwrite($newFichero,$contenidoCambiado);
  }
}

reemplazar("el_quijote.txt","quijote-modificado.txt","Sancho","Morty");