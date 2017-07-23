<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 13:58
 */
class Spartan implements iPower
{
    public function setPower(Usuario $user)
    {
        return $user->getPower()*1.1;
    }

}