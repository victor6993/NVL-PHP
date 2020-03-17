<?php

function cuentaLetras($texto,$letra) {
  $letras = substr_count(strtolower($texto),$letra);
  if($letras > 1) {
    echo "El texto contiene ".$letras." letras ".$letra;
  } else {
    echo "El texto contiene ".$letras." letra ".$letra;
  }
  
}

cuentaLetras("Upgrade Hub","u");