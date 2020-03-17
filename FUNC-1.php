<?php

function cuentaLetraA($texto) {
  $letrasA = substr_count(strtolower($texto),"a");
  if($letrasA > 1) {
    echo "El texto contiene ".$letrasA." letras a";
  } else {
    echo "El texto contiene ".$letrasA." letra a";
  }
  
}

cuentaLetraA("Upgrade");