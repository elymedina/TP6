<?php

    class Asignatura{
        private string $nombre;
        private float $calificacion;
    
        public function __construct() {
            $this->nombre = '';
            $this->calificacion=0;
        }
    
        public function getNombre(): string {
            return $this->nombre;
        }
    
        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }
    
        public function getCalificacion(): float {
            return $this->calificacion;
        }
    
        public function setCalificacion(float $calificacion): void {
            $this->calificacion = $calificacion;
        }
    }

?>