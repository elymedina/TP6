<?php
    require_once("asignatura.php");

    class Alumno{
        private string $nombre;
        private string $apellido;
        private array $asignaturas;

        public function __construct(string $nombre, string $apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->asignaturas=[];    
        }

        public function getNombre():string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function getApellido(): string {
            return $this->apellido;
        }

        public function setApellido(string $apellido): void {
            $this->apellido = $apellido;
        }

        public function getAsignaturas():array {
            return $this->asignaturas;
        }

        public function setAsignaturas(array $asignaturas): void {
            $this->asignaturas = $asignaturas;
        }

        public function aniadirAsignatura(asignatura $asignatura): void {
            $this->asignaturas [] = $asignatura;
        }

        
        
    }

?>