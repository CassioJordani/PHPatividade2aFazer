<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

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
}

//criando um objeto
$livro1 = new Livro("texto_titulo", "nome_autor");
$livro1 ->mostrarLivro();
?>
