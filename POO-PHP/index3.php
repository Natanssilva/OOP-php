<?php
//POO

//as Classes podem ter propriedades e MÉTODOS
/*
    PROPRIEDADES são variaveis da classe
    MÉTODOS são funções da classe

    A palavra chave $this refere-se ao objeto atual e só fica
    disponivel dentro dos métodos(funções da classe) 
*/

class Fruta{

    public $nome;
    public $cor;

    public function apresentar_fruto(){
        return "O nome da fruta é {$this->nome} e a minha cor é {$this->cor}";
    }

}

$maca = new Fruta();  //intanciação 
$maca->nome = 'maça';
$maca->cor = 'vermelho';

$banana = new Fruta();
$banana->nome = 'banana';
$banana->cor = 'amarelo';

echo $maca->apresentar_fruto();
echo "<br>";
echo $banana->apresentar_fruto();
