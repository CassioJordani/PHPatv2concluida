<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

// Classe Calculadora
class Calculadora {
    public static function soma($a, $b) {
        return $a + $b;
    }
}

$num1 = 9150;
$num2 = 59;
$resultado = Calculadora::soma($num1, $num2);
echo "A soma de $num1 e $num2 é: $resultado";
?>
