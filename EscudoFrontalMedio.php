<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 20:48
 */
class EscudoFrontalMedio implements iEscudo
{
    private $proximoEscudo;

    public function power(Usuario $usuario)
    {
        if($usuario->getPower() <= 4) {
            return 2;
        }
        else {
            return $this->proximoEscudo->power($usuario);
        }
    }

    public function setProximo(iEscudo $proximo)
    {
        $this->proximoEscudo = $proximo;
    }

}