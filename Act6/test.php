<?php
    require_once("../act5/Cliente.php");
    require_once("../act5/direccion.php");
    require_once("../act5/telefono.php");
 
    $telefono=new telefono("celular","1","113218758754");
   
    $fechaNacimiento = new DateTime("28-09-2004");
    $cliente1 = new Cliente( "Eliana", "Medina", $fechaNacimiento);

    $cliente1->setTelefono($telefono);
   
    $direccion= new direccion("Ruiseñor", "2073", "Maquinista Savio", "1620");
    $cliente1->setDireccion($direccion);

    echo $cliente1->getTelefono()->Mostrar();
    echo $cliente1->getDireccion()->Mostrar();

   
    

?>