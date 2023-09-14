<?php

//Implementar

// Essa classe mostra que tem propriedade $nome

class Fruta{ 

    // propriedades == variaveis de PHP que existem dentro de um bloco

    public $nome;
    public $peso;
    public $tamanho;  

    /*Quando uma propriedade ou método é declarado como public,
     isso significa que ele pode ser acessado de fora da classe, ou seja,
      a partir de qualquer parte do código que tenha uma instância da classe.
    */
}

$laranja = new Fruta();  //estou criando um objeto da classe fruta no qual nesse objeto vai ter uma propriedade chamada nome

//definir o valor da propriedade, no caso $nome

$laranja ->nome = 'laranja';
$laranja ->peso = 110;
$laranja ->tamanho = 'pequena';

//criando um outro objeto do tipo Fruta

$banana = new Fruta();
$banana -> nome = 'banana';
$banana ->peso = 180;
$banana ->tamanho = 'grande';

//Como apresentar os propriedades de um objeto?

echo "Olá, sou a $banana->nome, meu peso é $banana->peso e o tamanho é $banana->tamanho";
echo '<br>';
echo "Olá, sou a $laranja->nome, meu peso é $laranja->peso e o tamanho é $laranja->tamanho";

//cada objeto criado a partir da mesma classe, contem suas propriedades de forma independente