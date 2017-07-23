<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 20:48
 */
class EscudoFrontalAvancado implements iEscudo
{
    private $proximoEscudo;

    public function power(Usuario $usuario)
    {
            return 3;
    }

    public function setProximo(iEscudo $proximo)
    {
        // Nthg TODO!
    }

}