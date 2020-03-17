<?php

$cadena = $_GET['cadena'];

function fullVocals($cadena){
  if(strpos($cadena,"a")!==false){
    if(strpos($cadena,"e")!==false){
      if(strpos($cadena,"i")!==false){
        if(strpos($cadena,"o")!==false){
          if(strpos($cadena,"u")!==false){
            echo "LA PALABRA $cadena CONTIENE LAS 5 VOCALES";
          } else echo "NO CONTIENE TODAS LAS VOCALES";
        } else echo "NO CONTIENE TODAS LAS VOCALES"; 
      } else echo "NO CONTIENE TODAS LAS VOCALES"; 
    } else echo "NO CONTIENE TODAS LAS VOCALES"; 
  } else echo "NO CONTIENE TODAS LAS VOCALES"; 
}

fullVocals($cadena);