<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 19:45
 */
class Gun
{

    private $nome;
    private $valor;

    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

}