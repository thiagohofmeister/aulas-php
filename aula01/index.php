<?php 
/**
 * Aula 01
 * Declarando variáveis, setando valores e imprimindo na tela.
 */

/**
 * Para de declarar uma variável no PHP é necessário utilizar o $ na frente do 
 * nome, assim informando que ela é uma variável.
 * No momento da declaração já é possível informar um valor para essa variável.
 *
 * Exemplo: $nome
 */

// Declarar variável sem setar um valor
$nome;

// Declarar variável já setando um valor
$nome = 'Thiago';

/**
 * Após declarar a variável e já colocar um valor nela. É possível usá-la para
 * qualquer fim, como por exemplo concatenar outras informações ou até mesmo
 * realizar cálculos. Abaixo vamos concatenar o sobrenome.
 */

// É possível concatenar de duas maneiras, a primeira é repetindo a variável:
$nome_completo = $nome . ' Hofmeister';

// Porém é mais vantajoso não precisar repetir a variável, assim:
$nome .= ' Hofmeister';

/**
 * Agora que já temos a variável preenchida, podemos exibi-la na tela
 */
echo $nome_completo;

// Separar informações
echo "<hr>";

echo $nome;

// Separar informações
echo "<hr>";

/**
 * Vamos agora declarar uma variável "salário", e na hora de imprimi-la iremos
 * colocar um formato de reais (com centavos) para o valor.
 */

$salario = 870.60; // OBS: os valores decimais devem ser separados por ponto (.)

// Agora podemos exibir na tela com o formato de moeda.
echo number_format($salario, 2);

// Separar informações
echo "<hr>";

// Ou então uma maneira mais rápida:
printf('%.2f', $salario);

// Separar informações
echo "<hr>";

// No próprio ECHO é possível concatenar informações:
echo 'R$ ' . number_format($salario, 2);
?>