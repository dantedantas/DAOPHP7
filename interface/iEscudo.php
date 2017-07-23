<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 20:43
 */
interface iEscudo
{
    public function power(Usuario $usuario);
    public function setProximo(iEscudo $proximo);

}