<?php

require_once("act3/Cliente.php");

//estableciendo fecha
$fechaNacimiento = new DateTime("28-09-2004");

// instanciando clase cliente
$cliente1 = new Cliente( "Eliana", "Medina", $fechaNacimiento);


// metodo mostrarDatos
echo $cliente1->mostrarDatos();

// metodo calcularEdad
$edad = $cliente1->calcularEdad();
echo $edad ;



?>