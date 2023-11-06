<?php
    //include 'class/Biblioteca.php';

    class Libro{
        private string $titulo;
        private string $autor;

        public function __construct(string $titulo , string $autor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function getTitulo()
        {
                return $this->titulo;
        }

        public function getAutor()
        {
                return $this->autor;
        }


    }

?>