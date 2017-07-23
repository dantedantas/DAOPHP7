<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 20:59
 */
class PowerShield
{
    public static function power(Usuario $usuario)
    {
        $WithoutShield = new SemEscudo();
        $FrontalShieldONE = new EscudoFrontalBasico();
        $FrontalShieldTWO = new EscudoFrontalMedio();
        $FrontalShieldTREE = new EscudoFrontalAvancado();


        $WithoutShield->setProximo($FrontalShieldONE);
        $FrontalShieldONE->setProximo($FrontalShieldTWO);
        $FrontalShieldTWO->setProximo($FrontalShieldTREE);

        return $WithoutShield->power($usuario);
    }
}