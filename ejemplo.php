<?php
    class Jefe
    {
        private string $cantidadEmpleado;
        private string $departamentoCargo;
        private string $domicilio;
        private string $legajo;
        private string $nombre;

        public function getcantidadEmpleado ()
        {
            return $this ->cantidadEmpleado;
        }
        public function getdepartamentoCargo ()
        {
            return $this ->departamentoCargo;
        }
        public function getdomicilio ()
        {
            return $this ->domicilio;
        }
        public function getlegajo ()
        {
            return $this ->legajo;
        }
        public function getnombre ()
        {
            return $this ->nombre;
        }

        
    }


?>