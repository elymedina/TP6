<?php

    require_once("direccion.php");

    require_once("telefono.php");

    $direccion= new direccion("Ruiseñor", "2073", "Maquinista Savio", "1620");

    $telefono=new telefono("celular","1","113218758754");

    echo $direccion->Mostrar();

    echo $telefono->Mostrar();
?>