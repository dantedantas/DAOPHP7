<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.07.2017
 * Time: 14:01
 */

$user = new Usuario("Goku","zIoN",5);
echo "Invoke Dragon: ".PowerSetup::setPower($user, new Dragon());
echo "<br>";

echo "Invoke Elfo: ".PowerSetup::setPower($user, new Elfo());
echo "<br>";

echo "Invoke Spartan: ".PowerSetup::setPower($user, new Spartan());
echo "<br>";

?>