<?php
        require_once("alumno.php");
        require_once("asignatura.php");

        class Docente{
                private string $nombre;
                private string $apellido;
                private array $alumnos;

                public function __construct(string $nombre, string $apellido){
                $this-> nombre = $nombre;
                $this-> apellido = $apellido;
                $this-> alumnos = [];
                }
                
                public function getNombre():string {
                        return $this->nombre;
                }

                public function setNombre(string $nombre): void {
                        $this->nombre = $nombre;
                }

                public function getApellido():string {
                        return $this->apellido;
                }

                public function setApellido(string $apellido): void {
                        $this->apellido = $apellido;
                }

                public function getAlumno(): array {
                        return $this->alumnos;
                }

                public function setAlumno(array $alumno): void {
                        $this->alumnos = $alumno;
                }

                public function aniadirAlumno(alumno $alumno): void {
                        $this->alumnos []= $alumno;
                }
                
                public function verAlumno(){
                        echo "nombre: {$this->nombre} \napellido: {$this->apellido} \n ";
                }
                public function calificar($alumno, $asignaturas,$calificacion): void {
                        $alumno->getAsignaturas($asignaturas)->setCalificacion($calificacion);
                }

                
        }


?>