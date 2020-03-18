<?php

$palabra = "molino";

$numVeces = 0;

$quijote = fopen('el_quijote.txt','r');
while(($contenido = fgets($quijote)) !== false) {
$contador = substr_count(strtolower($contenido),strtolower($palabra));

$numVeces = $numVeces + $contador;
}

fclose($quijote);

echo "La palabra <strong>$palabra</strong> aparece <strong>$numVeces</strong> veces en el texto del archivo";