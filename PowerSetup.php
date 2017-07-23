<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 13:47
 */
class PowerSetup
{

    /*
     * Nesse exemplo, como a 'PowerSetup' apenas retorna o resultado do método setPower, ela não é necessária.
     * Mas agora imagine que, além de calcular o power, essa classe precisasse fazer mais alguma coisa, como por exemplo,
     * alterar o status do Usuario, ou notificar algum outro objeto desse valor/power calculado.
     * Nesse caso, precisaríamos de uma classe para conter essa regra de negócios, e a classe 'PowerSetup' seria uma boa candidata.
     */
  public static function setPower(Usuario $user, iPower $power)
  {

      return $power->setPower($user);

  }

}