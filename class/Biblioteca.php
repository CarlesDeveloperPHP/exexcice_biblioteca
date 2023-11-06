<?php

    class Biblioteca{
        private array $libros;
        private string $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
            $this->libros = []; // Inicializa el array de libros vacío al crear la biblioteca
        }
        

            public function getNombre()
            {
                        return $this->nombre;
            }

            public function getLibros()
            {
                        return $this->libros;
            }

            public function agregarLibro(Libro $libroAagregar){
                $this->libros[] = $libroAagregar;
            }

            public function buscarTitulo(string $titulo): ?Libro {
                foreach ($this->libros as $libroBuscado) {
                    if ($titulo === $libroBuscado->getTitulo()) {
                        return $libroBuscado;
                    }
                }
                return null;
            }

            public function mostrarCatalogo(){
                foreach ($this->libros as $libro) {
                    echo "Título: ". $libro->getTitulo(). "\n" .
                    "Autor: ". $libro->getAutor(). "\n";
                }
            }



    }
?>