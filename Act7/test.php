<?php

require_once("alumno.php");
require_once("docente.php");
require_once("asignatura.php");

$alumno1= new Alumno("Eliana", "Medina");
$alumno2= new Alumno("Abril", "Olivares");

$docente1= new Docente("Matias", "Gomez");

$asignatura1= new Asignatura();
$asignatura1->setNombre("Literatura");

$asignatura2= new Asignatura();
$asignatura2->setNombre("Matematica");

$asignatura3= new Asignatura();
$asignatura3->setNombre("Fisica");

$alumno1->aniadirAsignatura($asignatura1);
$alumno1->aniadirAsignatura($asignatura2);
$alumno1->aniadirAsignatura($asignatura3);

$alumno2->aniadirAsignatura($asignatura1);
$alumno2->aniadirAsignatura($asignatura2);
$alumno2->aniadirAsignatura($asignatura3);

$docente1->aniadirAlumno($alumno1);
$docente1->aniadirAlumno($alumno2);

$docente1->verAlumno();
$docente1->verAlumno();

$docente1->calificar($alumno1, $asignatura1, 8);
$docente1->calificar($alumno1, $asignatura2, 10);
$docente1->calificar($alumno1, $asignatura3, 9);

$docente1->calificar($alumno2, $asignatura1, 9);
$docente1->calificar($alumno2, $asignatura2, 8);
$docente1->calificar($alumno2, $asignatura3, 10);



?>;