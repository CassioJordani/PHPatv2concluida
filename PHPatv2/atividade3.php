<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function mostrarAnimal() {
        echo "Animal: {$this->nome}, {$this->idade} anos<br>";
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($novaIdade){
        $this->idade = $novaIdade;
    }
}

class Cachorro extends Animal {
    public function mostrarAnimal() {
        echo "Cachorro: {$this->getNome()}, {$this->getIdade()} anos<br>";
    }

    public function roerOsso(){
        echo "* Roendo osso<br>";
    }
}

$animal1 = new Animal("Pipoca", 5);
$animal1->mostrarAnimal();

$animal1->setNome("Thor");
echo "O novo nome é: " . $animal1->getNome() . "<br>";
$animal1->setIdade(10);
echo "A nova idade é: " . $animal1->getIdade() . " anos<br>";

$animal1->mostrarAnimal();

$cachorro = new Cachorro("Soneca", 8);
$cachorro->mostrarAnimal();
$cachorro->roerOsso();
?>


