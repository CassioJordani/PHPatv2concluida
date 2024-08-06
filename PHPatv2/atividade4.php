<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.
// Definição da classe base Animal

// Classe base Animal com propriedades protegidas
class Animal {
    protected $nome;
    protected $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Métodos getters e setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

// Classe derivada Cachorro com getters e setters herdando de Animal
class Cachorro extends Animal {
    // Sobrescrever métodos caso necessário
}

// Criando um objeto da classe Cachorro
$cachorro = new Cachorro("Rex", 5);
echo "Nome do cachorro: " . $cachorro->getNome() . "<br>";
echo "Idade do cachorro: " . $cachorro->getIdade();
?>
