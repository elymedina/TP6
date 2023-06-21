<?php
    class Direccion{
        private string $calle;
        private string $numero;
        private string $localidad;
        private string $cp;

        public function __construct(string $calle, string $numero, string $localidad, string $cp) {
            $this->calle=$calle;
            $this->numero=$numero;
            $this->localidad=$localidad;
            $this->cp=$cp;
        }
        

        public function getCalle(): string {
                return $this->calle;
        }

        public function getNumero(): string {
                return $this->numero;
        }

        public function getLocalidad(): string {
                return $this->localidad;
        }
        
        public function getCp(): string {
                return $this->cp;
        }

        public function setCalle(string $calle): void {
                $this->calle = $calle;
        
        }

        public function setNumero(string $numero): void {
                $this->numero = $numero;
        }

        public function setLocalidad(string $localidad): void {
                $this->localidad = $localidad;
        }
     
        public function setCp(string $cp): void {
                $this->cp = $cp;
        }

        public function Mostrar(): string
        {
        return "Los datos de Direccion son: {$this->calle} \nNumero: {$this->numero} \nLocalidad:{$this->localidad} \nCP: {$this->cp}";
        }

    }
?>