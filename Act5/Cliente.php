<?php
    
    require_once("direccion.php");

    require_once("telefono.php");

    class Cliente
    {
        private string $nombre;
        private string $apellido;
        private DateTime $fechaNacimiento;
        private Direccion $direccion;
        private telefono $telefono;

        public function __construct(string $nombre, string $apellido, DateTime $fechaNacimiento)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function getNombre(): string
        {
            return $this -> nombre;
        }
        public function getApellido():string
        {
            return $this -> apellido;
        }

        public function getFechaNacimiento(): string
        { 
            return $this->fechaNacimiento->format("d-m-Y");
        }

        public function setNombre(string $nombre): void
        {     
            $this->nombre = $nombre;
        }
                
        public function setApellido(string $apellido): void
        {            
            $this->apellido = $apellido;   
        }

        public function setFechaNacimiento(DateTime $fechaNacimiento): void
        {
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function calcularEdad():int
        {
            $hoy = new DateTime();
            $edad = $hoy->diff($this->fechaNacimiento);
            return $edad->y;
        }

        public function mostrarDatos(): string
        {
            return "Nombre: {$this->nombre} \nApellido: {$this->apellido} \nFecha de nacimiento: ". $this->getFechaNacimiento() . "\nEdad: {$this->calcularEdad()} años";
        }

        public function getDireccion(): Direccion {
                return $this->direccion;
        }

        public function setDireccion(Direccion $direccion): void {
                $this->direccion = $direccion;
               
        }

        public function getTelefono(): telefono {
                return $this->telefono;
        }

        public function setTelefono(telefono $telefono): void {
                $this->telefono = $telefono;
        }

        // public function 
    }

?>