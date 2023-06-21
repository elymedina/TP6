<?php
    require_once("Cliente.php");

    require_once("direccion.php");

    require_once("telefono.php");

    $fechaNacimiento = new DateTime("28-09-2004");

    $cliente1 = new Cliente( "Eliana", "Medina", $fechaNacimiento);

    $direccion= new direccion("Ruiseñor", "2073", "Maquinista Savio", "1620");

    $telefono=new telefono("celular","1","113218758754");

    $cliente1->setDireccion($direccion);
    echo $cliente1->getDireccion()->Mostrar();

    $cliente1->setTelefono($telefono);
    echo $cliente1->getTelefono()->Mostrar();

?>