<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    //método
    public function mostrarLivro() {
        echo "Livro:{$this->titulo}{$this->autor}";
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($novoTitulo){
        $this->titulo = $novoTitulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($novoAutor){
        $this->autor = $novoAutor;
    }
}

//criando um objeto
$livro1 = new Livro("Livro de matematica", " desconhecido");
$livro1 -> mostrarLivro();

$livro1 -> setTitulo("Pequeno Príncipe");
echo "O novo título é: " . $livro1 -> getTitulo();
$livro1 -> setAutor("João");
echo "O novo autor é: " . $livro1 -> getAutor();

$livro1 -> mostrarLivro();


?>