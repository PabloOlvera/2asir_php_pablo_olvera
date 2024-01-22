 <?php
 #Declarar en un array asociativo, las 3 notas de un alumno. 
 #Visualizar la media
$notas= [
    "trimestre1" => 5,
    "trimestre2" => 7,
    "trimestre3" => 8,
];

function Media ($notas){
    $suma=0;
    echo "La media de las notas es:" . " ";

    foreach ($notas as $clave => $valor) {
        $suma += $valor;
      }
    $media = $suma / count($notas);
    echo $media;
}

Media($notas)
?>