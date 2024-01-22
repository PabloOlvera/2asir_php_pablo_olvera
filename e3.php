<?php
 #Dado un número en una variable, alterar el contenido de la variable por el opuesto.

$numero=$_POST['numero'];

function Proceso(&$num){
    $num=$num*(-1);
    return $num;
}

function Visualizar ($dato){
    echo $dato;
}

Proceso ($numero);
Visualizar ($numero);

?>