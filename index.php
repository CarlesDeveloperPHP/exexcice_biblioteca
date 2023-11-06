<?php


include 'class/Biblioteca.php';
include 'class/Libro.php';

$biblioteca = new Biblioteca("Alejandria");

$libro1 = new Libro("Título1", "Autor1");
$libro2 = new Libro("Título2", "Autor2");
$libro3 = new Libro("Título3", "Autor3");

$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);
$biblioteca->agregarLibro($libro3);

$titulo_a_Buscar = "Título1";

$libroEncontrado = $biblioteca->buscarTitulo($titulo_a_Buscar);

if ($libroEncontrado !== null) {
    echo "Libro encontrado:\n";
    echo "Título: " . $libroEncontrado->getTitulo() . "\n";
    echo "Autor: " . $libroEncontrado->getAutor() . "\n";
} else {
    echo "Libro no encontrado.\n". "\n";
}

$biblioteca->mostrarCatalogo();
?>