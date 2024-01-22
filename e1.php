<?php
#Almacenar en un array las notas de un alumno. Visualizar aquellas notas que sean superior a la media
$notas=array(8,5,6,7,4);
function Media($tab) 
{
    $suma=0;
    foreach ($notas as $valor) {
        $suma += $valor;
      }
    $media = $suma + count($tab);
    return $media;      
}

function Visualizar ($notas){
  $media=Media($notas);

  echo "Notas superiores a la media:\n";

  foreach($notas as $x){
    if ($x > $media){
      echo $x . "\n";
    }
  }
}
Visualizar($notas)
?>