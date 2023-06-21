<?php
    class telefono{
        private string $tipo;
        private string $prefijo;
        private string $numero;

        public function __construct(string $tipo, string $prefijo, string $numero)
        {
            $this->tipo = $tipo;
            $this->prefijo = $prefijo;
            $this->numero = $numero;
        
        }
    
        public function getTipo(): string {
                return $this->tipo;
        }

        public function getPrefijo(): string {
                return $this->prefijo;
        }

        public function getNumero(): string  {
                return $this->numero;
        }

        public function setTipo(string $tipo): void {
                $this->tipo = $tipo;
                
        }
        
        public function setPrefijo(string $prefijo): void {
                $this->prefijo = $prefijo;
                
        }

        public function setNumero(string $numero): void {
                $this->numero = $numero;
               
        }

        public function Mostrar(): string
        {
        return "Los datos de Telefono son: \nTipo:{$this->tipo}  \nPrefijo: {$this->prefijo} \nNumero: {$this->numero}";
        }
    }



?>