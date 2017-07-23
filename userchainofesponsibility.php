<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 14:01
 */

$user = new Usuario("Goku","zIoN",12);
echo "Invoke Shield: ".PowerShield::power($user);
echo "<br>";
echo $user;


?>