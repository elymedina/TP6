<?php

require_once("../Act1/Cliente.php");

// instanciando clase cliente
$cliente1 = new Cliente();

/// asignando un valor para cada una de sus propiedades
$cliente1->setNombre("Eliana");
$cliente1->setApellido("Medina");

$fechaNacimiento = new DateTime("28-09-2004");
$cliente1->setFechaNacimiento($fechaNacimiento);


// metodo mostrarDatos
echo $cliente1->mostrarDatos();

echo "\n";

// metodo calcularEdad
$edad = $cliente1->calcularEdad();
echo "Edad: " . $edad . " años";
?>